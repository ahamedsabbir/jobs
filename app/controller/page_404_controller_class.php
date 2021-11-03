<?php

class page_404_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	} 
	public function main_page_function(){
        $mdata = array();
        $mdata["error"] = "Page Not Found";
        $urlmsg = BASE_URL."page_404_controller_class/page_404_function/&msg=".urlencode(serialize($mdata));
        header("Location:$urlmsg");
		
	}
    public function page_404_function(){
        $this->page_model_validation_object_array->page_load_function("page_404");
    }
}
?>