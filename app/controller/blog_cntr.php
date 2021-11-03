<?php

class blog_cntr extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	}   
	public function main_page_function(){
        $page_data_array = array();
		$page_data_array["title"] = "blog web site";
		$page_data_array["meta"] = "blog web site";
		$model_object = $this->page_model_validation_object_array->model_load_function("blog_model");
		
		

		$this->page_model_validation_object_array->page_load_function("job_blog/index", $page_data_array);
	}
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>