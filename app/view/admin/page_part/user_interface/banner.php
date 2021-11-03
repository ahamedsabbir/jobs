 <section class="py-5">
	 <div class="container">
		 <div class="text-center"><h1>Banner Change</h1></div>
		 <div class="row">
			 <div class="col-md-8">
				<form role="form py-5">
					<div class="form-group py-2">
						<label for="icon">Icon Size(100*100)</label>
						<input type="file" class="form-control" id="icon">
					</div>
						<button type="submit" class="btn btn-primary">Save Changes</button> Sure to change     
				</form>			 
			 </div>
<?php
foreach($user_interface->user_interface as $user_interface){
?>
			 <div class="col-md-4">
			 	<img src="app/view/admin/upload/<?php echo $user_interface->banner; ?>" style="width:300px"/>
			 </div>
<?php
}
?>
		 </div>
	</div>  
</section> 