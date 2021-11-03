 <section class="py-5">
	 <div class="container">
		 <div class="text-center"><h1>Settinges</h1></div>
<?php
foreach($user_interface->user_interface as $user_interface){
?>
		<form role="form py-5">
			<div class="form-group py-2">
				<label for="page">Page Controller Class</label>
				<input type="text" class="form-control" id="page" placeholder="<?php echo $user_interface->page; ?>">
			</div>
			<div class="form-group py-2">
				<label for="item">Post Loop Item</label><br/>
				<input type="number" class="form-control" id="item" value="5" placeholder="<?php echo $user_interface->loop_item; ?>">
			</div>
				<button type="submit" class="btn btn-primary">Save Changes</button> Sure to change    
		</form> 
<?php
}
?>
	</div>  
</section> 