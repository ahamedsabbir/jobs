<?php

class admin_contact_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 
    
    
    
    
	public function main_page_function(){
        $send_data_array = array();
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
        
        
        
        $send_data_array["all_message"] = $model_class->select_all_post_function("contact_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/contact/contact", $send_data_array);
        
        
        
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
    

	public function reply_contant_function(){
        $send_mail = mail($to, $subject, $message, $form);
	}
    
	public function delete_contant_function($delete_id){
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
        $modelname->delete_model_function("contact_table", $delete_id);
        header("location:".BASE_URL."admin_contact_page_controller_class/");
	}   
    
}
?>