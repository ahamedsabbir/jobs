<?php

class user_loop_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 
	
	public function main_page_function(){
        
	}
	public function user_loop_page_function(){
        $send_data_array_to_page = array();
		$model_name = $this->page_model_validation_object_array->model_load_function("loop_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		
		
/*
* number pagination Controller.
*/	
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$send_data_array_to_page['get_main_data'] = $model_name->number_pagination_select_model("user_login_table", $start, LOOP_ITEM);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user/user_loop_for_all", $send_data_array_to_page);
		
		
		$send_data_array_to_page['number_pagination'] = $model_name->number_pagenation_row_count_model("user_login_table");
        $this->page_model_validation_object_array->page_load_function("admin/page_part/user/number_pagination", $send_data_array_to_page);	
		
		
		
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
    
	
	
	
	
	
	
	
	
	
	
	
	
	public function for_admin_loop_page_function(){
        $send_data_array_to_page = array();
		$model_name = $this->page_model_validation_object_array->model_load_function("loop_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");		
/*
* Prev-Next Controller.
*/	
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$send_data_array_to_page['get_main_data'] = $model_name->select_prev_next_pagination_model("user_login_table", $start, LOOP_ITEM);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user/user_loop_for_admin", $send_data_array_to_page);
		$send_data_array_to_page['prev_next_pagination'] = $model_name->pagenation_row_count_function("user_login_table");
        $this->page_model_validation_object_array->page_load_function("admin/page_part/user/prev_next_pagination", $send_data_array_to_page);	
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>