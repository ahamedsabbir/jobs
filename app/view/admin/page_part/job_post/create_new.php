<script>
$(document).ready(function(){
	$('#show_date').datepicker();
});
</script>
<div class="py-5">
    <div class="container">
        <div class="text-center py-3"><h1>Create Job Post</h1></div>
<?php
if(isset($data_error)){
	foreach($data_error as $key => $value){
        switch($key){
            case "job_icon":
                foreach($value as $val){
                    echo "icon: ".$val."<br />";
                }
            break;
            case "job_file":
                foreach($value as $val){
                    echo "file Name: ".$val."<br />";
                }
            break;
            default:
               # code..... 
            break;
        }
    }
}
?>


<form role="form" action="<?php echo BASE_URL."admin_job_controller_class/insert_job_post_function";?>" method="POST" enctype="multipart/form-data">
	<input type="text" class="form-control d-none" value="<?php echo session::get('id'); ?>" name="admin_id">
	<input type="text" class="form-control d-none" name="location" value="<?php echo $_SERVER["SERVER_ADDR"]; ?>" placeholder="<?php echo $_SERVER["SERVER_ADDR"]; ?>">
    <div class="form-group mb-3">
        <label for="">Upload Icon</label>
        <input type="file" class="form-control" name="icon">
    </div>   
    <div class="form-group mb-3">
        <label for="">Upload PDF File</label>
        <input type="file" class="form-control" id="" name="file">
    </div>    
    <div class="form-group mb-3">
        <label for="">Select Category</label>

        <select class="form-control" name="job_category_id">
<?php
if(isset($post_cat_name)){
    foreach($post_cat_name as $key => $value){
        echo "<option name='' value='{$value['id']}'>{$value['name']}</option>";
    }
}            
?>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="">Dedline</label>
        <input type="text" id="show_date" class="form-control" name="dedline">
    </div>
    <div class="form-group mb-3">
        <label for="">Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group mb-3">
        <label for="">Job Content</label>
        <textarea name="content" id="content" class="form-control editor"></textarea>
    </div>
        <button type="submit" class="btn btn-primary btn-lg form-control" name="submit">Submit</button>   
</form>
<script>	
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "<?php echo UPLOAD; ?>"
 });
</script>
    </div>   
</div> 