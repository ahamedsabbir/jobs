<script>
$(document).ready(function(){
	$('#show_date').datepicker();
});
</script>
<div class="py-5">
    <div class="container">
        <div class="text-center py-3"><h1>Update Job Post</h1></div>
<?php
if(isset($update_msg)){
	echo "<i style='color:green'>".$update_msg."</i>";
}
?>
<?php 
if(isset($data_insert_error)){
	foreach($data_insert_error as $key => $value){
        switch($key){
            case "name":
                foreach($value as $val){
                    echo "Category Name: ".$val."<br />";
                }
            break;
            case "title":
                foreach($value as $val){
                    echo "Category Title: ".$val."<br />";
                }
            break;
            default:
               # code..... 
            break;
        }
    }
}
if(isset($file_insert_error)){
	foreach($file_insert_error as $key => $value){
        switch($key){
            case "icon":
                foreach($value as $val){
                    echo "icon: ".$val."<br />";
                }
            break;
            default:
               # code..... 
            break;
        }
    }
}
if(isset($update_data)){
    foreach($update_data as $key => $value){
?>
		<div class="row">
			<div class="col-lg-10">
<form role="form" action="<?php echo BASE_URL."admin_job_controller_class/update_post_method/".$value['id'];?>" method="POST" enctype="multipart/form-data">
	<input type="text" class="form-control d-none" value="<?php echo session::get('id'); ?>" name="id">
	<input type="text" class="form-control d-none" name="location" value="<?php echo $_SERVER["SERVER_ADDR"]; ?>" placeholder="<?php echo $_SERVER["SERVER_ADDR"]; ?>">
    <div class="form-group mb-3">
        <label for="">Upload Icon</label>
        <input type="file" class="form-control" id="" name="icon">
    </div>   
    <div class="form-group mb-3">
        <label for="">Upload PDF File</label>
        <input type="file" class="form-control" id="" name="file">
    </div>    
    <div class="form-group mb-3">
        <label for="">Select Category</label>

        <select class="form-control" name="job_cat_id">
<?php
if(isset($post_cat_name)){
    foreach($post_cat_name as $catkey => $catvalue){
		if($catvalue['id'] == $value['job_category_id']){
			echo "<option value='{$catvalue['id']}' selected>{$catvalue['name']}</option>";
		}else{
			echo "<option value='{$catvalue['id']}'>{$catvalue['name']}</option>";
		}
        
    }
}            
?>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="">Dedline</label>
        <input type="text" id="show_date" class="form-control" name="dedline" value="<?php echo $value["dedline"];?>">
    </div>
    <div class="form-group mb-3">
        <label for="">Post Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $value["title"];?>">
    </div>
    <div class="form-group mb-3">
        <label for="">Job Content</label>
        <textarea name="content" id="content" class="form-control editor"><?php echo $value["content"];?></textarea>
    </div>
        <button type="submit" class="btn btn-primary btn-lg form-control" name="submit">Update</button>   
		</form>
	 </div>
		<div class="col-lg-2">
			<p>Icon: <?php echo $value["icon"]; ?></p>
			<img src="app/view/admin/upload/img/<?php echo $value["icon"]; ?>" width="200px">
		</div>
		
		</div><?php echo $_SERVER["SCRIPT_NAME"]; ?>

<?php
   }
}
?>
<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "<?php echo UPLOAD; ?>"
 });
</script>
    </div>   
</div> 
