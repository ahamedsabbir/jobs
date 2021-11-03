<article>
  <div class="container px-4 py-5">
	  <h2 class="pb-2 text-center"><a href="<?php echo BASE_URL.'job_blog_cntr'; ?>">Current Job</a></h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
<?php
if(isset($job_post_table_limit_3))		
	foreach($job_post_table_limit_3 as $key => $value){
?>	
  <div class="col-lg-4 text-center">
	<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="app/view/publish/upload/sss300x300.jpg">

	 <p><strong><?php echo format::textShorten($value['title'], 30); ?></strong></p>
	<p><?php echo format::textShorten($value['content'], 200); ?></p>
	<p><a class="btn btn-secondary" href="<?php echo BASE_URL."publish_job_page_controller_class/job_view_page_function/".$value['id']; ?>">View details &raquo;</a></p>
  </div>			
<?php	}	
		

?>
    </div>
	</div>
</article>