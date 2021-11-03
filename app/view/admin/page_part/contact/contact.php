<section class="py-5">
    <div class="container">
        <div class="text-center"><h1>Inbox</h1></div>
       
        
        <table class="table_id table table-bordered">
            <thead>
                <tr>
                    <th>No:</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
$i=0;
foreach($all_message as $keys => $values){
    $i++;
?>
                <tr>
                    
                    <td><?php echo $i ?></td>
                    <td><?php echo $values['email']; ?></td>
                    <td><?php echo $values['mobile']; ?></td>
                    <td><?php echo $values['title']; ?></td>
                    <td><?php echo $values['date']; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL."admin_contact_page_controller_class/reply_contant_function"; ?>"> Reply </a> || 
                        <a href="<?php echo BASE_URL."admin_contact_page_controller_class/delete_contant_function/".$values['id']; ?>"> Delete </a></td>
                </tr> 
<?php
}
?>
            </tbody>
        </table>
        
      
    </div>   
</section> 