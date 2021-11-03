<div class="col-xs-9 col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">Admin Profile</div>
		<div class="panel-body">
<?php 
if(isset($insert_msg)){
	echo $insert_msg;
}
if(isset($select_post)){
    foreach($select_post as $key => $value){
?>
			<form action="index.php?url=admin_controller_class/update_post_page_function/<?php echo $value['id']; ?>" class="form-horizontal" role="form" method="post">
				
				<div class="form-group">
						<label class="control-label col-sm-2" for="">Date:</label>
					<div class="col-sm-10"> 
						<input type="hidden" class="form-control" id="" name="post_date" value="<?php echo date('d/m/Y');?>">
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-2" for="">Category:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" placeholder="" name="post_category" value="<?php echo $value['post_category']; ?>">
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-2" for="">Title:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="" placeholder="" name="post_title" value="<?php echo $value['post_title']; ?>">
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-2" for="">Post Content:</label>
					<div class="col-sm-10">
						<textarea name="post_content" rows="10" cols="40" id="editor"><?php echo $value['post_content']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default" name="submit">Submit</button>
					</div>
				</div>
            </form>

<?php
   }     
}                 
?>
<script>
initSample();
</script>
		</div>
	</div>
</div>