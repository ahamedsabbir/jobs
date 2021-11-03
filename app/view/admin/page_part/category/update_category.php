 <div>
    <div class="container py-5">
        <div class="text-center"><h1>Update Category</h1><hr></div>
<?php
if(isset($update_msg)){
	echo "<i style='color:green'>".$update_msg."</i>";
}
?>
		<div class="row">
			<div class="col-md-8">
<?php 
if(isset($data_insert_error)){
	foreach($data_insert_error as $key => $value){
        switch($key){
            case "name":
                foreach($value as $val){
                    echo "Category Name: ".$val."<br />";
                }
            break;
            case "title":
                foreach($value as $val){
                    echo "Category Title: ".$val."<br />";
                }
            break;
            default:
               # code..... 
            break;
        }
    }
}
if(isset($file_insert_error)){
	foreach($file_insert_error as $key => $value){
        switch($key){
            case "icon":
                foreach($value as $val){
                    echo "icon: ".$val."<br />";
                }
            break;
            default:
               # code..... 
            break;
        }
    }
}
if(isset($get_update_data)){
	foreach($get_update_data as $key => $value){
?>
				<form class="form" action="<?php echo BASE_URL."admin_category_controller_class/update_category_function/".$value['id']; ?>" role="form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name min3-max50 </label>
						<input type="text" class="form-control" id="" name="name" placeholder="<?php echo $value['name']; ?>" value="<?php echo $value['name']; ?>">
					</div>
					<div class="form-group">
						<label for="">Title min20-max110</label>
						<input type="text" class="form-control" id="" name="title" placeholder="<?php echo $value['title']; ?>" value="<?php echo $value['name']; ?>">
					</div>
					<div class="form-group">
						<label for="">Class</label>
						<input type="text" class="form-control" id="" name="class" placeholder="<?php echo $value['class']; ?>" value="<?php echo $value['name']; ?>">
					</div>
					<div class="form-group">
						<label for="">Enter Icon within 2mb</label>
						<input type="file" class="form-control" id="" name="icon">
					</div><br />
					<button type="submit" class="btn btn-primary" name="submit">Update</button>  
				</form>
			</div>
			<div class="col-md-4">
				<i>Current Category Icon</i>
				<img src="app/view/publish/upload/img/<?php echo $value['icon']; ?>" style="width:300px;"/>
			</div>
<?php
	}
}
?>
		</div>
    </div>   
</div> 