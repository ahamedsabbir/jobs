 <div>
    <div class="container py-5">
        <div class="text-center"><h1>Create Category</h1><hr></div>
		<div class="row">
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
?>
			<form class="form" action="<?php echo BASE_URL."admin_category_controller_class/insert_category_function"; ?>" role="form" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" id="" name="name" placeholder="min3-max50">
				</div>
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" class="form-control" id="" name="title" placeholder="min20-max110">
				</div>
				<div class="form-group">
					<label for="">Class</label>
					<input type="text" class="form-control" id="" name="class">
				</div>
				<div class="form-group">
					<label for="">Enter Icon within 2mb</label>
					<input type="file" class="form-control" id="" name="icon">
				</div><br />
				<button type="submit" class="btn btn-primary" name="submit">Insert</button>  
			</form>
		</div>
    </div>   
</div> 