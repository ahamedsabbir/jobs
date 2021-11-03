 <div class="">
    <div class="container">
        <div class="text-center py-5"><h1>Job Post List</h1></div>
        <table class="table  table-bordered table-hover">
            <tr>
                <th>SN</th>
                <th>Dedline</th>
                <th>Post Title</th>
                <th>Action</th>
            </tr>
<?php
if(isset($send_all_post)){
    $sn = 1;
    foreach($send_all_post as $key => $value){
?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $value['dedline'] ?></td>
                <td><?php echo format::textShorten($value['title'], 200); ?></td>
                <td>
                    <a href="index.php?url=admin_job_controller_class/update_page_method/<?php echo $value['id'] ?>">Edit</a> ||
                    <a href="index.php?url=admin_job_controller_class/delete_job_post_function/<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
                    
<?php
    }
}else{
    echo "<tr><td colspan='6' class='text-center'>Empty</td></tr>";
}

?>
                </table> 
    </div>   
</div> 