<div class="py-5">
	 <div class="container">
		 <div class="chatbox">
			 <table class="table">
				 <tr>
				 	<th>Name</th>
				 	<th>Email</th>
				 	<th>Mobile</th>
				 	<th>Password</th>
				 	<th></th>
				 </tr>
			 
			 
		 	 
<?php	
foreach($user_data->table as $table){
    echo "<tr><td>".$table->name."</td>";
    echo "<td>".$table->email."</td>";
    echo "<td>".$table->mobile."</td>";
    echo "<td>".$table->password."</td>";
    echo "<td><a href='mailto:".$table->email."?subject=Account Activation Mail.&body=Hy ".$table->name.", please stay with us.'>"."Email </a><a href='".BASE_URL."user_login_page_controller_class/approve_method/".$table['id']."'>"."Approve </a><a href='".BASE_URL."user_login_page_controller_class/xml_delete_method/".$table['id']."'>"."Delete</a></td></tr>";
}			 				  
?>
			 </table>
			 
		 </div>
	 </div>  
</div>