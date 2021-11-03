<?php

class admin_category_controller_class extends main_controller_class{
	
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
		$item = isset($_GET['item']) ? $_GET['item'] : 5;
		
		$send_data_array_to_page['get_all_category'] = $model_name->select_post_pagenation_function("category_table", $start, $item);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/category/category_list", $send_data_array_to_page);
		
		
		$send_data_array_to_page['pagenation'] = $model_name->pagenation_row_count_function("category_table");
        $this->page_model_validation_object_array->page_load_function("admin/page_part/category/pagenation", $send_data_array_to_page);	
		
		
		
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function create_category_function(){
		$this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/category/create_new_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	public function insert_category_function(){
        $msg_array = array();
        $text_validation_object = $this->page_model_validation_object_array->validation_load_function("text_validation");
        $file_validation_object = $this->page_model_validation_object_array->validation_load_function("file_validation");
		
        $text_validation_object->text_validate("name")->chack_empty()->length_validate(3, 50);
        $text_validation_object->text_validate("title")->length_validate(20, 110); 
        $parmited_image_extention = array("jpg","png","jpeg","gif");
        $file_validation_object->file_validate('icon')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);
        if($text_validation_object->submit()){
            $insert_data_array = array(
                'name' => $text_validation_object->valid_data['name'],
                'title' => $text_validation_object->valid_data['title'],
                'class' => $_POST['class'],
                'icon' => $file_validation_object->valid_data['icon']
            );
            $method_object = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
            $insert_result = $method_object->admin_insert_function("category_table", $insert_data_array);
			if(isset($insert_result)){
				move_uploaded_file($file_validation_object->valid_data['icon_temp_name'],"app/view/publish/upload/img/".$file_validation_object->valid_data['icon']);
			}
            header("location:".BASE_URL."admin_category_controller_class/&msg=successfully insert");
        }else{
            $msg_array["data_insert_error"] = $text_validation_object->errors;
            $msg_array["file_insert_error"] = $file_validation_object->errors;
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
            $this->page_model_validation_object_array->page_load_function("admin/page_part/category/create_new_category", $msg_array);
            $this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
        }
	}    
    public function update_page_function($get_id_form_page){
		$data_array = array();
		$method_object = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$data_array['get_update_data'] = $method_object->select_post_by_id('category_table', $get_id_form_page);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/category/update_category", $data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
    }
    public function update_category_function($get_id_form_page){
        
        if(isset($_POST['submit'])){
			$model_object = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
			$delete_data = $model_object->select_post_by_id("category_table", $get_id_form_page);
			foreach($delete_data as $key => $value){
				unlink("app/view/publish/upload/img/".$value['icon']);
			}
            $update_by = "id=:id";
        	$text_validation_object = $this->page_model_validation_object_array->validation_load_function("text_validation");
        	$file_validation_object = $this->page_model_validation_object_array->validation_load_function("file_validation");
			$text_validation_object->text_validate("name")->chack_empty()->length_validate(3, 50);
			$text_validation_object->text_validate("title")->length_validate(20, 110);
			$parmited_image_extention = array("jpg","png","jpeg","gif");
			$file_validation_object->file_validate('icon')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);

            $update_data_array =  array(
								'id' => $get_id_form_page,
                                'name' => $text_validation_object->valid_data['name'],
                                'title' => $text_validation_object->valid_data['title'],
                                'class' => $_POST['class'],
                                'icon' => $file_validation_object->valid_data['icon']
                            );
			
            
            $update_result = $model_object->admin_update_function("category_table", $update_data_array, $update_by);
            $msg_array = array();
			if($update_result == 1){
               	$msg_array['update_msg'] = "update successfull";
				move_uploaded_file($file_validation_object->valid_data['icon_temp_name'],"app/view/publish/upload/img/".$file_validation_object->valid_data['icon']);
            }else{
                echo $msg_array['update_msg'] = "update fail";
            }
			$send_data_array = array();
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
			$send_data_array['get_update_data'] = $model_object->select_post_by_id('category_table', $get_id_form_page);
			$this->page_model_validation_object_array->page_load_function("admin/page_part/category/update_category", $send_data_array, $msg_array);
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
        }else{
			
        }
		
    }
	
    
    
    
    
}
?>