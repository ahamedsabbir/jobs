 <section class="py-5">
	 <div class="container emp-profile">
		 <div class="text-center"><h1>General</h1></div>
<?php
foreach($user_interface->user_interface as $user_interface){
?>
		<form role="form py-5" action="<?php echo BASE_URL."user_interface_controller_class/gelneral_update_function/"; ?>" method="post">
			<div class="form-group py-2">
				<label for="name">Admin Name</label>
				<input type="text" class="form-control" id="name" placeholder="<?php echo $user_interface->admin; ?>" name="admin" value="<?php echo $user_interface->admin; ?>">
			</div>
			<div class="form-group py-2">
				<label for="title">Site Title</label>
				<input type="text" class="form-control" id="title" placeholder="<?php echo $user_interface->site_title; ?>" name="site_title" value="<?php echo $user_interface->site_title; ?>">
			</div>
			<div class="form-group py-2">
				<label for="meta_tag">Meta Tag</label>
				<input type="text" class="form-control" id="meta_tag" placeholder="<?php echo $user_interface->meta_tag; ?>" name="meta_tag" value="<?php echo $user_interface->meta_tag; ?>">
			</div>
			<div class="form-group py-2">
				<label for="copy_right">Copy Right</label>
				<input type="text" class="form-control" id="copy_right" placeholder="<?php echo $user_interface->copy_right; ?>" name="copy_right" value="<?php echo $user_interface->copy_right; ?>">
			</div>
				<button type="submit" class="btn btn-primary">Save Changes</button> Sure to change   
		 </form>
<?php
}
?>
	</div>  
</section> 