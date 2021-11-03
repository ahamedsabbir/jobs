 <div class="admincontent">
    <div class="container">
        <div class="text-center"><h1>Create Suggestion Post</h1><hr></div>
<?php 
if(isset($insert_msg)){
	echo $insert_msg;
}
?>
<form role="form">
    
    
    <div class="form-group">
        <input type="text" class="form-control hidden" id="" value="<?php echo date('d/m/Y');?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control hidden" id="" value="<?php echo $_SESSION["admin_name"];?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control hidden" id="" value="Bangladesh">
    </div>  
    
    
    
    <div class="form-group">
        <label for="">Upload Icon</label>
        <input type="file" class="form-control" id="">
    </div>   
    <div class="form-group">
        <label for="">Upload PDF File</label>
        <input type="file" class="form-control" id="">
    </div>    
    <div class="form-group">
        <label for="">Select Category</label>
        <select class="form-control">
	       <option name="taka" value="2">Games</option>
	       <option name="taka" value="5">Videos</option>
	       <option name="taka" value="10">Job</option>
	       <option name="taka" value="20">None</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Job Content</label>
        <textarea name="" id="editor" class="form-control"></textarea>
    </div>
        <button type="submit" class="btn btn-default">Submit</button>   
</form>
<script>
initSample();
</script>
    </div>   
</div> 