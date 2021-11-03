<div class="py-5">
    <div class="container">
        <div class="text-center"><h1>User List</h1></div>
       
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No:</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Code</th>
                </tr>
            </thead>
            <tbody>
<?php
$i=0;
foreach($get_main_data as $keys => $values){
    $i++;
?>
                <tr>    
                    <td><?php echo $i ?></td>
                    <td><?php echo $values['name']; ?></td>
                    <td><?php echo $values['email']; ?></td>
                    <td><?php echo $values['mobile']; ?></td>
                    <td><?php echo $values['code']; ?></td>
				</tr> 
<?php
}
?>
            </tbody>
        </table>
        
      
    </div>   
</div> 