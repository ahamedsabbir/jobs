<?php

class database_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        //session::checkSession();
	} 
	public function main_page_function(){
        $send_data_array = array(); 
		$send_data_array['database'] = simplexml_load_file("system/database.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/database", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function before_update_page_function(){
		$this->page_model_validation_object_array->page_load_function("admin_login/page_part/database");	
	}
	
	public function database_update_function(){
	   	$xml = simplexml_load_file("system/database.xml");
       	$db_name = $_POST['db_name'];
       	$db_host = $_POST['db_host'];
       	$db_user = $_POST['db_user'];
       	$db_password = $_POST['db_password'];
		foreach($xml->database as $database){
			if($database["id"]=="admin"){
				$database->db_name = $db_name;
				$database->db_host = $db_host;
				$database->db_user = $db_user;
				$database->db_password = $db_password;
				break;
			}
		}
		file_put_contents("system/database.xml",$xml->asXML());
		header("location:".BASE_URL."database_controller_class/");
	}
    
	public function  before_update_function(){
	   	$xml = simplexml_load_file("system/database.xml");
       	$db_name = $_POST['db_name'];
       	$db_host = $_POST['db_host'];
       	$db_user = $_POST['db_user'];
       	$db_password = $_POST['db_password'];
		foreach($xml->database as $database){
			if($database["id"]=="admin"){
				$database->db_name = $db_name;
				$database->db_host = $db_host;
				$database->db_user = $db_user;
				$database->db_password = $db_password;
				break;
			}
		}
		file_put_contents("system/database.xml",$xml->asXML());
		header("location:".BASE_URL."admin_login_page_controller_class/");
	}
    
}
?>