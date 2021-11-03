 <div class="py-5">
    <div class="container">
        <div class="text-center"><h1>All Question</h1></div>
       
		
		
<table id="table_id" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
        <tr class="text-center">
			<th>SN</th>
            <th>Unique_ID</th>
            <th>Approve</th>
            <th>Question</th>
            <th>Department</th>
            <th>Admin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>		
<?php
	$i = 1;
	foreach($all_data as $key => $value){
?>

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $value['unique_id']; ?></td>
            <td>
<?php 
if($value['status'] == 1){
 	echo "Publish";
}else{
	echo "not Publish";
}										 
?>
			
			</td>
            <td><?php echo $value['question']; ?></td>
            <td>
<?php  
foreach($department_name as $dep_key => $dep_value){
	if($dep_value["department_id"] == $value["department_id"]){
		echo $dep_value['dep_name'];
	}
}
?>
			</td>
            <td>
<?php 
if(session::get('level') == 1){
	echo Ucfirst($value['name']);
}else{
	echo "XXXXXX";
}									 
?>
			</td>
            <td>
				<a href="<?php echo BASE_URL; ?>admin_exam_controller_class/single_queastion_function/<?php echo $value['unique_id']; ?>">Open</a>
			</td>
        </tr>		
<?php
	}	
		
?>
    </tbody>
</table>		
    </div>   
</div> 
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>