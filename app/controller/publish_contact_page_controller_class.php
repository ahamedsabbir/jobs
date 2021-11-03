<?php

class publish_contact_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	}   
	public function main_page_function(){
        $data_array = array();
		$select_model = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_header");
        
		$this->page_model_validation_object_array->page_load_function("publish/page_part/contact");
        
        $data_array['category_table'] = $select_model->select_all_function("category_table");
        $this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_category", $data_array);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_footer");
	}
	public function insert_content_method(){
        $send_msg_by_url = array();
        $title = $_POST['title'];
        $email = $_POST['email']; 
        $mobile = $_POST['mobile']; 
        $message = $_POST['message']; 
        $insert_array = array(
            "title" => $title,
            "email" => $email,
            "mobile" => $mobile,
            "message" => $message
        );
        $select_model = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        $insert_reselt = $select_model->publish_insert_function("contact_table", $insert_array);
        header("location:".BASE_URL."job_blog_cntr/about_method");
	}
}
?>
    
    