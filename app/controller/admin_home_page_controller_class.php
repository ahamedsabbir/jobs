<?php

class admin_home_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
		session::init();
		if(session::get('login') == false){
			header("Location:".BASE_URL."admin_login_page_controller_class");
		}
	} 
	public function main_page_function(){
        $send_data_array = array();
        
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        
        
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
        
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/admin_profile");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
   
}
?>