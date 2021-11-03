<?php

class admin_login_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	} 
	public function main_page_function(){
        session::init();
        if(session::get('login') == true){
            header("Location:".BASE_URL."admin_home_page_controller_class");
        }else{
			$this->page_model_validation_object_array->page_load_function("admin_login/page_part/login");
		}
		
	}
    
    
    
    
	public function login_authention_function(){
        $name = $_POST['name'];
        $password = md5($_POST['password']);        
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_login_db_model_class");
        $count = $modelname->userControl("admin_login_table", $name, $password);
        if($count > 0){
            $result = $modelname->getUserData("admin_login_table", $name, $password);
            session::init();
            session::set('login', true);
            session::set('name', $result[0]['name']);
            session::set('id', $result[0]['id']);
            session::set('level', $result[0]['level']);
            header("Location:".BASE_URL."admin_home_page_controller_class");
        }else{
            header("Location:".BASE_URL."admin_login_page_controller_class");
        }
	}
    
    
    
    
    public function logOut(){
        session::init();
        session::destroy();
        header("Location:".BASE_URL."admin_login_page_controller_class");
    }    
    
    
    
    
 	public function signup_function(){
        $this->page_model_validation_object_array->page_load_function("admin_login/page_part/sign_up");
	}   
    
    
    public function insert_function(){
        $post_msg_array = array();
        $admin_name = $_POST['admin_name'];
        $email = $_POST['email']; 
        $mobile = $_POST['mobile']; 
        $admin_password = md5($_POST['admin_password']); 
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_login_db_model_class");
        $row_count = $modelname->userControl("admin_login_table", $admin_name, $admin_password);
        if($row_count == 0){
            $insert_array = array(
                "admin_name" => $admin_name,
                "email" => $email,
                "mobile" => $mobile,
                "admin_password" => $admin_password
            );
            $modelname->insert_admin_function("admin_login_table", $insert_array);
            $this->page_model_validation_object_array->page_load_function("admin_login/include/admin_login_page");
        }else{
            $post_msg_array['email_Pass_match'] = "email and password alrady have";
            $this->page_model_validation_object_array->page_load_function("admin_login/include/admin_sign_up_page", $post_msg_array);
        }
       
	}
    
    
   	public function forget_password_function(){
        $this->page_model_validation_object_array->page_load_function("admin_login/include/admin_forget_password");
	}   
    
   	public function update_password_function(){
        $post_msg_array = array();
        $admin_name = $_POST['admin_name'];
        
        $get_name = $admin_name;
        
        
        $old_password = md5($_POST['old_password']); 
        $new_password = md5($_POST['new_password']); 
        
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_login_db_model_class");
        $row_count = $modelname->userControl("admin_login_table", $admin_name, $old_password);
        if($row_count > 0){
            
            $insert_array = array(
                "admin_password" => $new_password
            );
            $modelname->update_password_function("admin_login_table", $insert_array, $get_name);
            $this->page_model_validation_object_array->page_load_function("admin_login/include/admin_login_page");
        }else{
            //$post_msg_array['email_Pass_match'] = "email and password alrady have";
            //$this->page_model_validation_object_array->page_load_function("admin_login/admin_sign_up_page", $post_msg_array);
        }   
	} 
    
    
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>