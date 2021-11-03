 <div class="">
    <div class="container">
        <div class="text-center"><h1>Suggestion Post List</h1><hr></div>
        <table class="table  table-bordered table-hover">
            <tr>
                <th>SN</th>
                <th>Post Date</th>
                <th>Post Autor</th>
                <th>Post Category</th>
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
                <td><?php echo $value['post_date'] ?></td>
                <td><?php echo $value['admin_name'] ?></td>
                <td><?php echo $value['post_category'] ?></td>
                <td>
<?php 
$content = $value['post_title']; 
    if(strlen($content) > 30){
        echo substr($content, 0, 30);
    }
        
?>
                </td>
                <td>
                    <a href="index.php?url=admin_controller_class/full_post_vew_page_function/<?php echo $value['id'] ?>">View</a> ||
                    <a href="index.php?url=admin_controller_class/update_post_page_function/<?php echo $value['id'] ?>">Edit</a> ||
                    <a href="index.php?url=admin_controller_class/delete_by_id/<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
                    
<?php
    }
}else{
    echo "<tr><td colspan='6' class='text-center'>Empty</td></tr>";
}
?>
            </table> 
            <ul class='pagination'>               
<?php
$pagenation = ceil($pagenation/3);
    for($i=1;$i<=$pagenation;$i++){
	echo "<li class='page-item'><a class='page-link' href='".BASE_URL."admin_suggestion_controller_class/main_page_function/$i'>$i</a></li>";
}               
?>              
            </ul> 

                
    </div>   
</div> 