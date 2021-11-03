<?php

class publish_home_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	}   
	public function main_page_function(){
        $data_array = array();
		$model_object = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_cover");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_search");
		
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_header_add");
        
        $data_array['job_post_table_limit_3'] = $model_object->select_all_by_limit("job_post_table", 3);
        $this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_3_job_post", $data_array);
        
        
        $data_array['suggestion_post_table_limit_8'] = $model_object->select_all_by_limit("suggestion_table", 8);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_8_suggestion_post", $data_array);
        
        $data_array['category_table'] = $model_object->select_all_function("category_table");
        $this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_category", $data_array);
        
		$this->page_model_validation_object_array->page_load_function("publish/page_part/advertisement_01");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/advertisement_02");
		if(cookie::get('login') == ""){
			$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_signin");
		}
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_footer");
	}
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>