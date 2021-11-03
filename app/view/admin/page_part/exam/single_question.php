<div class="py-5">
    <div class="container">
<?php
if(isset($update_msg)){
	echo "<i style='color:green'>".$update_msg."</i>";
}
?>
<?php 
if(isset($question)){
    foreach($question as $que_key => $que_value){
?>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <h5 class="card-header">
					  <a class="btn btn-warning btn-xs" href="<?php echo BASE_URL."admin_exam_controller_class"; ?>"><i class="fas fa-backward"></i></a>
					  Post By <?php echo $que_value['name']; ?>. 
					  Date: <?php echo format::formatDate($que_value['date']); ?>
<?php
if(isset($department)){
	foreach($department as $dep_key => $dep_value){
		if($dep_value["department_id"] == $que_value["department_id"]){
			echo " Category: ".$dep_value["dep_name"];
		}
	}
}												 
?>
					</h5>
				  <div class="card-body">
					<h5 class="card-title"><?php echo $que_value['question']; ?></h5>
					  <ul>
<?php
if(isset($answer)){
	foreach($answer as $ans_key => $ans_value){
		if($ans_value["right_ans"] == 1){
			echo "<li style='color:green'>".$ans_value["answer"]."</li>"; 
		}else{
			echo "<li style='color:red'>".$ans_value["answer"]."</li>"; 
		}
	}
}
?>
						  </ul>
					 <a class="btn btn-info" href="<?php echo BASE_URL; ?>admin_exam_controller_class/update_page_function/<?php echo $que_value['unique_id']; ?>">Update</a>
<?php
if($que_value['status'] == 0){
?>
					<a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin_exam_controller_class/approve_que_function/<?php echo $que_value['unique_id']; ?>">Approve</a> 
<?php
}else{
?>
					<a class="btn btn-primary" href="<?php echo BASE_URL; ?>admin_exam_controller_class/unapprove_que_function/<?php echo $que_value['unique_id']; ?>">Unapprove</a>		
<?php
}
?>
					<a class="btn btn-danger" href="<?php echo BASE_URL; ?>admin_exam_controller_class/delete_que_function/<?php echo $que_value['unique_id']; ?>">Delete</a>  
				  </div>
				</div>
			</div>
		</div>
<?php
   }
}
?>
    </div>   
</div> 
