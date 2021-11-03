<?php

class admin_job_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 
    
    
    
    
	public function main_page_function(){
        $send_data_array_to_page = array();
		$model_name = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
       
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$item = isset($_GET['item']) ? $_GET['item'] : 10;

		$send_data_array_to_page['send_all_post'] = $model_name->select_post_pagenation_function("job_post_table", $start, $item);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/show_all", $send_data_array_to_page);

        $send_data_array_to_page['pagenation'] = $model_name->pagenation_row_count_function("job_post_table");
        $this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/pagenation", $send_data_array_to_page);		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
    
    
    
    
    
    
	public function create_job_post_function(){
        $post_data_array = array();
		$modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
        $post_data_array["post_cat_name"] = $modelname->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/create_new", $post_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	public function insert_job_post_function(){
        if(!isset($_POST['submit'])){header("location:".BASE_URL."admin_job_controller_class");}
        $post_data_array = array();
        $post_msg_array = array();
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
        $file_validation = $this->page_model_validation_object_array->validation_load_function("file_validation");
       
       
       
        $parmited_image_extention = array("jpg","png","jpeg","gif");
        $file_validation->file_validate('icon')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);        
       
       
       
         
       if(empty($_FILES['file']['name'])){
           $file = ""; 
       }else{
            $parmited_file_extention = array("pdf","zip","rar","doc","docx");
            $file = $file_validation->file_validate('file')->chack_error()->file_size("10000000")->file_extention($parmited_file_extention);          
           	move_uploaded_file($file_validation->valid_data['file_temp_name'],"app/view/admin/upload/file/".$file_validation->valid_data['file']);
            $file = $file_validation->valid_data['file'];
       }
      
       
       
       
        if($file_validation->submit()){
            $admin_id = $_POST["admin_id"];
            $location = $_POST["location"];
            $job_category_id = $_POST["job_category_id"];
            $dedline = $_POST["dedline"];
            $title = $_POST["title"];
            $content = $_POST["content"];
           	move_uploaded_file($file_validation->valid_data['icon_temp_name'],"app/view/admin/upload/img/".$file_validation->valid_data['icon']);
            $insert_data_array = array(
                'admin_id' => $admin_id,
                'location' => $location,
                'job_category_id' => $job_category_id,
                'dedline' => $dedline,
                'title' => $title,
                'content' => $content,
                'icon' => $file_validation->valid_data['icon'],
                'file' => $file
            );
            $insert_msg = $modelname->admin_insert_function("job_post_table", $insert_data_array);
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
            $post_data_array["post_cat_name"] = $modelname->select_all_post_function("job_cat_table");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/create_new", $post_data_array);
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
        }else{
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
            $post_data_array["post_cat_name"] = $modelname->select_all_post_function("job_cat_table");

            $post_msg_array["data_error"] = $file_validation->errors;
            $this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/create_new", $post_data_array, $post_msg_array);
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");    
        } 
    }    
    
    
    
	public function delete_job_post_function($delete_id){
        $data_array = array();
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
        $data_array["delete"] = $modelname->select_post_by_id("job_post_table", $delete_id);
        foreach($data_array["delete"] as $key => $value){
            if($value['id'] == $delete_id){
                $modelname->delete_model_function("job_post_table",$delete_id);
                unlink("app/view/admin/upload/img/".$value['icon']);
                unlink("app/view/admin/upload/file/".$value['file']);
				header("location:".BASE_URL."admin_job_controller_class");
            }
        }
	} 
   
	
	function update_page_method($update_id = null){
        $post_data_array = array();
		$modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
        $post_data_array["update_data"] = $modelname->select_post_by_id("job_post_table", $update_id);
        $post_data_array["post_cat_name"] = $modelname->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/update", $post_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	function update_post_method($get_id_form_page){
		if(isset($_POST['submit'])){
			$model_object = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");


            $update_by = "id=:id";
        	$text_validation_object = $this->page_model_validation_object_array->validation_load_function("text_validation");
        	$file_validation_object = $this->page_model_validation_object_array->validation_load_function("file_validation");
			$text_validation_object->text_validate("dedline")->chack_empty();
			$text_validation_object->text_validate("title");
			$text_validation_object->text_validate("content");
			
			$parmited_image_extention = array("jpg","png","jpeg","gif");
			$file_validation_object->file_validate('icon')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);
            if(empty($_FILES['file']['name'])){
                $file = "";
            }else{
                $parmited_image_extention = array("pdf","zip","rar");
			    $file_validation_object->file_validate('file')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);
                $file = $file_validation_object->valid_data['file'];
            }
			    
            
			
			$delete_data = $model_object->select_post_by_id("job_post_table", $get_id_form_page);
			
			if(isset($delete_data)){
				foreach($delete_data as $key => $value){
					
					$icon_chack = file_exists("app/view/admin/upload/img/".$value['icon']);
					$file_chack = 	file_exists("app/view/admin/upload/file/".$value['file']);
					if($icon_chack == 1 and $file_chack == 1){
                        unlink("app/view/admin/upload/img/".$value['icon']);
                        unlink("app/view/admin/upload/file/".$value['file']);
					}
				
					
				}
				
				move_uploaded_file($file_validation_object->valid_data['icon_temp_name'],"app/view/admin/upload/img/".$file_validation_object->valid_data['icon']);
                if(isset($_FILES['file']['name'])){
                    move_uploaded_file($file_validation_object->valid_data['file_temp_name'],"app/view/admin/upload/file/".$file_validation_object->valid_data['file']);
                }
							
				
			}			
			
			
			
			
			
			
			$update_data_array =  array(
								'id' => $get_id_form_page,
                                'title' => $text_validation_object->valid_data['title'],
                                'dedline' => $text_validation_object->valid_data['dedline'],
                                'content' => $text_validation_object->valid_data['content'],
                                'location' => $_POST['location'],
                                'icon' => $file_validation_object->valid_data['icon'],
                                'file' => $file
                            );
			
            
            $update_result = $model_object->admin_update_function("job_post_table", $update_data_array, $update_by);
            $msg_array = array();
			if($update_result == 1){
               	$msg_array['update_msg'] = "update successfull";
            }else{
                echo $msg_array['update_msg'] = "update fail";
            }
			$send_data_array = array();
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
			$send_data_array['get_update_data'] = $model_object->select_post_by_id('job_post_table', $get_id_form_page);
			$this->page_model_validation_object_array->page_load_function("admin/page_part/job_post/update", $send_data_array, $msg_array);
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
        }else{
			
        }			
	}
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	function blog_image_upload_method(){
		if(isset($_FILES['upload']['name'])){
			 $file = $_FILES['upload']['tmp_name'];
			 $file_name = $_FILES['upload']['name'];
			 $file_name_array = explode(".", $file_name);
			 $extension = end($file_name_array);
			 $new_image_name = rand() . '.' . $extension;
			 chmod('upload', 0777);
			 $allowed_extension = array("jpg", "gif", "png");
				 if(in_array($extension, $allowed_extension)){
					  move_uploaded_file($file, 'app/view/admin/upload/' . $new_image_name);
					  $function_number = $_GET['CKEditorFuncNum'];
					  $url = 'app/view/admin/upload/' . $new_image_name;
					  $message = '';
					  echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
				 }
		}	
	}
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
    
}
?>