<?php

class admin_login_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	function userControl($data_table_name, $name, $password){
        $sql = "SELECT * FROM $data_table_name WHERE name=:name AND password=:password";
        $data = array(":name" => $name, ":password" => $password);
		return $this->db_array->affectedRows($sql, $data);
	}
    public function getUserData($data_table_name, $name, $password){
        $sql = "SELECT * FROM $data_table_name WHERE name=:name AND password=:password";
        $data = array(":name" => $name, ":password" => $password);
		return $this->db_array->selectUser($sql, $data);
    }
    
	function insert_admin_function($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
	} 
    
    
    
    function update_password_function($table_name, $insert_data_array, $update_by_name){
		return $this->db_array->update_by_name_function($table_name, $insert_data_array, $update_by_name);
	}
    
    

    
    
    
    
    
}
?>