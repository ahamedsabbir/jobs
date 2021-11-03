<?php
class model_view_validation_load_class{
	function __construct(){}
	function page_load_function($page_name, $data_01 = false, $data_02 = false){
		if($data_01 == true){
			extract($data_01);
		}
        if($data_02 == true){
			extract($data_02);
		}
		include "app/view/".$page_name.".php";
	}   
	function model_load_function($model_name){
		include "app/model/".$model_name.".php";
		return new $model_name;
	}
    public function validation_load_function($validation_name){
        include "app/validation/".$validation_name.".php";
        return new $validation_name();
    }    	
}
?>