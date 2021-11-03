<?php

class admin_suggestion_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 
    
    
    
    
	public function main_page_function($page_count=1){
        $send_data_array_to_page = array();
		$model_name = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_head_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_header_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_collapse_side_nav_part");
        if(isset($page_count)){
	       $page_count=($page_count*3)-3;
        }else{
	       $page_count=0;
        }
		$send_data_array_to_page['send_all_post'] = $model_name->select_post_pagenation_function("job_post_table", $page_count);
        $send_data_array_to_page['pagenation'] = $model_name->pagenation_row_count_function("job_post_table");
		$this->page_model_validation_object_array->page_load_function("admin/include/show_all_suggestion_post_content_part", $send_data_array_to_page);
        
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_category_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_footer_part");
	}
    
    
    
    
    
    
	public function create_suggestion_post_function(){
		$this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_head_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_header_part");
		$this->page_model_validation_object_array->page_load_function("admin/admin_collapse_side_nav_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/create_new_suggestion_post_content_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_category_part");
		$this->page_model_validation_object_array->page_load_function("admin/include/admin_footer_part");
	}
  
    
    
    
    
    
    
    
    
    
}
?>