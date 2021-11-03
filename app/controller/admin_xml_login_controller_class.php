<?php

class admin_xml_login_controller_class extends main_controller_class{	
	public function __construct(){
		parent::__construct();
		session::init();
	} 
	public function main_page_function(){         
        if(session::get('login') == true){
            header("Location:".BASE_URL."admin_home_page_controller_class");
        }else{
			$this->page_model_validation_object_array->page_load_function("admin_xml_login/page_part/login");
		}
	}
	public function login_authention_function(){
		$send_msg = array();
        $email = $_POST['email'];
        $password = $_POST['password']; //md5($_POST['password']);
		$xml = simplexml_load_file("app/view/admin_xml_login/admin_list/data.xml");
		foreach($xml->admin as $admin){
			if($admin['id'] == $email and $admin->password == $password){	
				echo $email_as =  $admin['id'];
				echo $photo = $admin->photo;
				echo $name = $admin->name;
				echo $level = $admin->level;
				/*session::set('login', true);
				session::set('email', $email_as);
				session::set('image', $photo);
				session::set('name', $name);
				session::set('level', $level);*/
				//header("Location:".BASE_URL."admin_home_page_controller_class/");	
			}else{
				$send_msg['email_error'] = 'must enter valid email';
				$urlmsg = BASE_URL."admin_xml_login_controller_class/&msg=".urlencode(serialize($send_msg));
				header("Location:$urlmsg");
			}
		}

		
	}
	function logOut_method(){
        session::destroy();
		header("Location:".BASE_URL."admin_xml_login_controller_class/");
    } 
		
		


	
	
		
		
		
    public function signup_page_function(){
        $this->page_model_validation_object_array->page_load_function("user_login/page_part/signup");
	}
	
	
	
	public function insert_xml_function(){
		$modelname = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$row_count = $modelname->chack_row_function("user_login_table", $_POST['email']);
		$xml = simplexml_load_file("app/view/user_login/user/data.xml");
		if($row_count == 0){
			
			$date = date('Fj_Y_g_ia');
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$password = md5($_POST['password']);
			$table = $xml->addChild("table");
			$table->addAttribute('id',$date);
			$table->addChild("name",$name);		
    		$table->addChild("email",$email);	
    		$table->addChild("mobile",$mobile);	
    		$table->addChild("password",$password);	
			file_put_contents("app/view/user_login/user/data.xml", $xml->asXML());
		}
		header("Location:".BASE_URL."job_blog_cntr");
		
		
	}
	
	
	
	
    public function insert_function(){
		$text_validation_object = $this->page_model_validation_object_array->validation_load_function("text_validation");
        $modelname = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$text_validation_object->text_validate("name");
		$text_validation_object->text_validate("email");
		$text_validation_object->text_validate("mobile");
		$text_validation_object->text_validate("password");
		
		
		
		
		
        $row_count = $modelname->chack_row_function("user_login_table", $text_validation_object->valid_data['email']);
        
        if($row_count == 0){
            $insert_array = array(
                "name" => $text_validation_object->valid_data['name'],
                "email" => $text_validation_object->valid_data['email'],
                "mobile" => $text_validation_object->valid_data['mobile'],
                "password" => md5($text_validation_object->valid_data['password'])
            );
            
            $result =  $modelname->insert_admin_function("user_login_table", $insert_array);
			
    		header("Location:".BASE_URL."user_login_page_controller_class/main_page_function");
			//mail($to, $subject, $message, $headers);
        }else{
            //$post_msg_array['email_Pass_match'] = "email and password alrady have";
            //$this->page_model_validation_object_array->page_load_function("admin_login/include/admin_sign_up_page", $post_msg_array);
        }
	}
		
		
 
	
	
	function forget_password_method(){
		$this->page_model_validation_object_array->page_load_function("user_login/page_part/send_password");
    } 
	
	
	
	function send_password_method(){
		$email = $_POST['email'];
		$model_object = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$count = $model_object->row_count_function_for_email("user_login_table", $email);
		if($count > 0){
			$result = $model_object->get_user_data_by_email("user_login_table", $email);
			$id = $result[0]['id'];
			$email = $result[0]['email'];
			$text = substr($email, 0, 3);
			$rand = rand(10000, 99999);
			$code = "$text$rand";
			//mail($email, "password Change", $code, $headers);
			$model_object->update_code_by_id("user_login_table", $code, $id);
			header("Location:".BASE_URL."user_login_page_controller_class/open_by_email_method");
			
		}else{
			$send_msg['email_error'] = 'must enter valid email';
			$urlmsg = BASE_URL."user_login_page_controller_class/forget_password_method/&msg=".urlencode(serialize($send_msg));
        	header("Location:$urlmsg");
		}
    }
	
	
	function open_by_email_method(){
		$this->page_model_validation_object_array->page_load_function("user_login/page_part/update_password");
    }
	
	
	
	
	function password_update_method(){
		$code = $_POST['code'];
		$password = md5($_POST['password']);
		$model_object = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$count = $model_object->row_count_function_for_code("user_login_table", $code);
		if($count > 0){
			$model_object->update_password_by_code("user_login_table", $password, $code);
			header("Location:".BASE_URL."job_blog_cntr/");
		}
    }
	
	
	function image_update_method(){
		$model_object = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$update_by = "id=:id";
		$file_validation_object = $this->page_model_validation_object_array->validation_load_function("file_validation");
		$parmited_image_extention = array("jpg","png","jpeg","gif");
		$file_validation_object->file_validate('image')->chack_error()->file_size("1000000")->file_extention($parmited_image_extention);	
		$delete_data = $model_object->select_post_by_id("user_login_table", cookie::get('id'));	
		echo $delete_data[0]['image'];
		if(isset($delete_data)){
			$icon_chack = file_exists("app/view/user_login/image/".$delete_data[0]['image']);
			unlink("app/view/user_login/image/".$delete_data[0]['image']);
		}	
		move_uploaded_file($file_validation_object->valid_data['image_temp_name'],"app/view/user_login/image/".$file_validation_object->valid_data['image']);	
		$update_data_array =  array(
								'id' => cookie::get('id'),
                                'image' => $file_validation_object->valid_data['image']
                            );	
		cookie::set('image', $file_validation_object->valid_data['image']);
		$update_result = $model_object->image_update_model("user_login_table", $update_data_array, $update_by);	
		header("Location:".BASE_URL."user_login_page_controller_class/profile_page_function");
	
    }
	
	function info_update_method(){
		$model_object = $this->page_model_validation_object_array->model_load_function("user_login_db_model_class");
		$update_by = "id=:id";	
		$update_data_array = array(
								'id' => cookie::get('id'),
								'name' => $_POST['name'],
								'mobile' => $_POST['mobile']
                            );
		cookie::set('name', $_POST['name']);
		$update_result = $model_object->image_update_model("user_login_table", $update_data_array, $update_by);	
		header("Location:".BASE_URL."user_login_page_controller_class/profile_page_function");
	
    }
	
	
	function xml_data_show_method(){
		$xml['user_data'] = simplexml_load_file("app/view/user_login/user/data.xml");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/xml_usre_data", $xml);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	
	}
	
	
	
	function xml_delete_method($id = null){
		$xml = simplexml_load_file("app/view/user_login/user/data.xml");
		    $index=0;
    		$i=0;
		foreach($xml->table as $table){
			if($table["id"] == $id){
				$index=$i;
				break;
			}
			$i++;
		}
    	unset($xml->table[$index]);
    	file_put_contents("app/view/user_login/user/data.xml",$xml->asXML());
		
		
		
		header("Location:".BASE_URL."user_login_page_controller_class/xml_data_show_method");
	}
	
	
	
}
?>