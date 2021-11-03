<?php

class user_login_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
		session::init(); 
	}
	function userControl($data_table_name, $email, $password){
        $sql = "SELECT * FROM $data_table_name WHERE email=:email AND password=:password";
        $data = array(":email" => $email, ":password" => $password);
		return $this->db_array->affectedRows($sql, $data);
	}
    public function getUserData($data_table_name, $email, $password){
        $sql = "SELECT * FROM $data_table_name WHERE email=:email AND password=:password";
        $data = array(":email" => $email, ":password" => $password);
		return $this->db_array->selectUser($sql, $data);
    }
    

    
    
    
    function update_password_function($table_name, $insert_data_array, $update_by_name){
		return $this->db_array->update_by_name_function($table_name, $insert_data_array, $update_by_name);
	}
    
	function row_count_function_for_email($data_table_name, $email){
        $sql = "SELECT * FROM $data_table_name WHERE email=:email";
        $data = array(":email" => $email);
		return $this->db_array->affectedRows($sql, $data);
    }
    public function get_user_data_by_email($data_table_name, $email){
        $sql = "SELECT * FROM $data_table_name WHERE email=:email";
        $data = array(":email" => $email);
		return $this->db_array->selectUser($sql, $data);
    }
    function update_code_by_id($table_name, $code, $id){
		return $this->db_array->update_code_function($table_name, $code, $id);
	}
	
	
	
	function row_count_function_for_code($data_table_name, $code){
        $sql = "SELECT * FROM $data_table_name WHERE code=:code";
        $data = array(":code" => $code);
		return $this->db_array->affectedRows($sql, $data);
    }
    function update_password_by_code($table_name, $password, $code){
		return $this->db_array->update_password_function($table_name, $password, $code);
	}
    
    public function profile_info_by_id_method($data_table_name, $id){
        $sql = "SELECT * FROM $data_table_name WHERE id=:id";
        $data = array(":id" => $id);
		return $this->db_array->selectUser($sql, $data);
    }
	
	
    function select_post_by_id($data_table_name, $data_id_name){
		$sql = "SELECT * FROM $data_table_name WHERE id=:id";
		$data = array(":id" => $data_id_name);
		return $this->db_array->select_function($sql, $data);
	}
	
    function image_update_model($table_name, $update_data_array, $update_by){
		return $this->db_array->update_function($table_name, $update_data_array, $update_by);
	}
	
	function chack_row_function($data_table_name, $email){
        $sql = "SELECT * FROM $data_table_name WHERE email=:email";
        $data = array(":email" => $email);
		return $this->db_array->affectedRows($sql, $data);
	}
	
	
	function insert_admin_function($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
	} 
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>