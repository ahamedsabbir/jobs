<div class="py-5">
	<div class="container">
		<div class="text-center"><h1>Insert Question</h1></div>
		<div class="text-center">
<?php
 if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
     foreach($msg as $key => $value){
        echo "<i style='color:red;'>".$value."<i>";
     }
 }
?>
			</div>
		<form role="form py-5" action="<?php echo BASE_URL."question_submit_without_login_controller_class/insert_function/"; ?>" method="post">
			<div class="row">
				<input type="text" class="form-control d-none" id="question" name="unique_id" value="<?php echo $rand = $count_row."_".rand(10000000, 99999999); ?>" placeholder="<?php echo $count_row."_".rand(10000000, 99999999); ?>">
<?php
if(session::get('name') == null){				
?>
				
				<div class="col-md-12 py-2">
					<label for="">Enter Your Name</label>
					<input required type="text" class="form-control" id="" name="name">
				</div>
				
<?php
}
?>
				
				
				<div class="col-md-12 py-2">
					<label for="">Select Department</label>
					<select required class="form-control" id="" name="department">
						<option></option>
<?php
foreach($department as $key => $value){
	echo "<option value='".$value['department_id']."'>".$value['dep_name']."</option>";
}
?>
					</select>
				</div>
				<div class="col-md-12 py-4">
					<label for="">Question</label>
					<textarea class="form-control editor" id="content" name="question"></textarea>
				
				
				
				
				
				</div>
				<div class="col-md-6 py-2">
					<label for="">Ans 01</label>
					<input required type="text" class="form-control" id="" name="ans_1">
				</div>
				<div class="col-md-6 py-2">
					<label for="">Ans 02</label>
					<input required type="text" class="form-control" id="" name="ans_2">
				</div>
				<div class="col-md-6 py-4">
					<label for="">Ans 03</label>
					<input required type="text" class="form-control" id="" name="ans_3">
				</div>
				<div class="col-md-6 py-4">
					<label for="">Ans 04</label>
					<input required type="text" class="form-control" id="" name="ans_4">
				</div>
				<div class="col-md-12 py-2">
					<label for="">Right Ans</label>
					<input required type="number" class="form-control" id="" name="right_ans">
				</div>
				<div class="col-md-12 py-4">
					<button type="submit" class="btn btn-primary">Save Que</button> 
				</div>	  
			</div>
		</form>	
	</div>  
</div>
<script>	
 CKEDITOR.replace( 'content', {
  height: 70
 });
</script>