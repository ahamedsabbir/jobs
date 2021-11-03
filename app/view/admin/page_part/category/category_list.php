 <div class="py-5">
    <div class="container">
        <div class="text-center"><h1>Category List</h1><hr></div>
<?php
if(isset($_GET['msg'])){
	echo "<i style='color:green'>".$_GET['msg']."</i>";
}				
?>
        <table class="table table-bordered table-hover">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
<?php
if(isset($get_all_category)){
    $sn = 1;
    foreach($get_all_category as $key => $value){
?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['class'] ?></td>
                <td>
                    <a href="<?php echo BASE_URL.'admin_category_controller_class/update_page_function/'.$value['id']; ?>">Update</a> ||
                    <a href="<?php echo BASE_URL.'admin_category_controller_class/delete_by_id/'.$value['id']; ?>">Delete</a>
                </td>
            </tr>
                    
<?php
    }
}else{
    echo "<tr><td colspan='4' class='text-center'>Empty</td></tr>";
}
?>
            </table> 

                
    </div>   
</div> 