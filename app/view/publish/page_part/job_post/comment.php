<section>
  <div class="container">
	  <h2 class="text-center">User Comment</h2>
	  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
<?php
if(isset($comment_view)){
    foreach($comment_view as $key => $value){
?>  
		  	<div class="col-lg-12">
				<p><?php echo format::formatDate($value['date']); ?></p>
				<div class="row">
					<div class="col-lg-1">
						<img src="app/view/publish/upload/profile/<?php echo $value['image']; ?>" style="width:50px;"/>
						
					</div>
					<div class="col-lg-11">
						
						
<script>
 $(document).ready(function(){
	 $('<?php echo "#reply".$value['com_id']; ?>').click(function(){
		 $('<?php echo "#toggle_form".$value['com_id']; ?>').toggle(100);
	 });
});
</script>
						<p><?php //echo $value['name'].": "; ?><?php echo $value['comment']; ?><i id="<?php echo "reply".$value['com_id']; ?>" class="btn">Reply</i></p>
						<form style="display: none;" id="<?php echo "toggle_form".$value['com_id']; ?>" class="form py-3" action="<?php echo BASE_URL."publish_job_page_controller_class/sub_comment_method";?>" method="post">
							<input class="d-none" type="text" name="post_id" value="<?php echo $value["post_id"]; ?>">
							<input class="d-none" type="text" name="user_id" value="<?php echo cookie::get("id"); ?>">
							<input class="d-none" type="text" name="com_id" value="<?php echo $value["com_id"]; ?>">
							<textarea name ="sub_comment"></textarea><br />
							<button type="submit" class="btn btn-primary">Reply</button>
						</form>
						
						
						
						
					</div>
				</div>
<?php
if(isset($sub_comment_view)){
	foreach($sub_comment_view as $ke => $vl){
		if($value['post_id'] == $vl['post_id'] && $value['com_id'] == $vl['com_id']){
						
?>
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-1">
						<img src="app/view/publish/upload/profile/<?php echo $vl['image']; ?>" style="width:50px;"/>
					</div>
					<div class="col-lg-10">
						<p><?php echo format::formatDate($vl['sub_date']); ?></p>
						<p><?php //echo $vl['name'].": "; ?><?php echo $vl['sub_comment']; ?></p>
					</div>
				</div>								
<?php
		}	
	}
}											 
    }
}
?>
		  </div>
      </div>
	</div>
</section>















