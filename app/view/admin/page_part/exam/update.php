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
<?php
foreach($get_queasion_info as $que_key => $que_value){	
?>
		<form role="form py-5" action="<?php echo BASE_URL."admin_exam_controller_class/queasion_update_function/".$que_value["unique_id"]; ?>" method="post">
			<div class="row">
				<div class="col-md-12 py-2">
					<label for="">Unique Id</label>
					<input required type="text" class="form-control" id="" name="" value="<?php echo $que_value["unique_id"]; ?>" palceholder="<?php echo $que_value["unique_id"]; ?>">
				</div>
				
				<div class="col-md-12 py-2">
					<label for="">Select Department</label>
					<select required class="form-control" id="" name="department_id">
						<option></option>
<?php
foreach($department as $dep_key => $dep_value){
	if($dep_value["department_id"] == $que_value["department_id"]){
		echo "<option value='".$dep_value['department_id']."' selected>".$dep_value['dep_name']."</option>";
	}
	echo "<option value='".$dep_value['department_id']."'>".$dep_value['dep_name']."</option>";
}
?>
					</select>
				</div>
				<div class="col-md-12 py-4">
					<label for="">Question</label>
					<textarea class="form-control editor" id="content" name="question"><?php echo $que_value["question"]; ?></textarea>
				</div>
				
				
<?php
$i = 1;
foreach($get_answer_info as $ans_key => $ans_value){	
?>
				
				
				<div class="col-md-6 py-2">
					<label for="">Ans <?php echo $count = $i++; ?></label>
					<input required type="text" class="form-control" id="" name="ans_<?php echo $count; ?>" value="<?php echo $ans_value["answer"]; ?>" placeholder="<?php echo $ans_value["answer"]; ?>">
				</div>
				
				
<?php
	if(1 == $ans_value["right_ans"]){
		$right_ans = $count;
	}
	if($i == 5){
		break;
	}												
}
?>
				<div class="col-md-12 py-2">
					<label for="">Right Ans</label>
					<input required type="number" class="form-control" id="" name="right_ans" value="<?php echo $right_ans; ?>" placeholder="<?php echo $right_ans; ?>">
				</div>	
				
				
				
				<div class="col-md-12 py-4">
					<button type="submit" class="btn btn-primary">Update</button> 
				</div>
				
				
				
			</div>
		</form>	
<?php
}
?>
	</div>  
</div>
<script>	
 CKEDITOR.replace( 'content', {
  height: 70
 });
</script>