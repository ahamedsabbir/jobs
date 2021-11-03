<article class="">
    <div class="container">
              
<?php
if(isset($job_view)){
    foreach($job_view as $key => $value){
?>  
		<div class="jobviewpost">
			<h1 class="text-center py-3"><?php echo $value['title']; ?></h1>
            <div class="row">
            	<div class="col-md-2 col-xl-2">
					<img src="app/view/publish/upload/<?php echo $value['icon']; ?>" style="width:150px;"/>
					<p>Publish Date:-<?php echo $value['date']; ?></p>
					<p>End Date:-<?php echo $value['date']; ?></p>
					<p>Admin:-<?php echo $value['admin_name']; ?></p>
					<p>Location:-<?php echo $value['location']; ?></p>
				</div>
            	<div class="col-md-10 col-xl-10">
					<p><?php echo $value['content']; ?></p>
				</div>
			</div>
			<div class="text-center py-2"><a href="app/view/publish/upload/sss300x300.jpg"><button class="btn btn-primary btn-lg">Download</button></a></div>
		</div>
		<div>
			<form action="<?php echo BASE_URL."publish_job_page_controller_class/post_comment_method";?>" method="post">
				<input class="invisible" type="text" name="post_id" value="<?php echo $value['id']; ?>">
				<input class="invisible" type="text" name="user_id" value="<?php echo cookie::get("id"); ?>">
				<textarea name="comment" rows="4" cols="100"></textarea><br/>
				<button type="submit" class="btn btn-warning btn-lg">Comment</button>
			</form>
    	</div>
<?php
    }
}
?>                 
           
    </div>
</article>