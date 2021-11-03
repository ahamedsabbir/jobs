<?php

class user_interface_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	}
	
	public function main_page_function(){
        
	}
	
	public function gelneral_page_function(){
        $send_data_array = array(); 
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/general", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function icon_page_function(){
        $send_data_array = array();  
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/icon", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function banner_page_function(){
        $send_data_array = array(); 
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/banner", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function slider_page_function(){
        $send_data_array = array();  
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/slider", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function settinges_page_function(){
        $send_data_array = array();  
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/settinges", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	public function social_page_function(){
        $send_data_array = array();
		$send_data_array['user_interface'] = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		$model_class = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
        $send_data_array["row_count"] = $model_class->row_count_function_for_status("contact_table", 0);
        $send_data= $model_class->row_count_function_for_status("contact_table", 0);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/user_interface/social", $send_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_category");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	
	
	
	public function gelneral_update_function(){
	   	$xml = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
       	$admin = $_POST['admin'];
       	$site_title = $_POST['site_title'];
       	$meta_tag = $_POST['meta_tag'];
       	$copy_right = $_POST['copy_right'];
		foreach($xml->user_interface as $user_interface){
			if($user_interface["id"]=="admin"){
				$user_interface->admin = $admin;
				$user_interface->site_title = $site_title;
				$user_interface->meta_tag = $meta_tag;
				$user_interface->copy_right = $copy_right;
				break;
			}
		}
		file_put_contents("app/view/admin/page_part/user_interface/data.xml",$xml->asXML());
		header("location:".BASE_URL."user_interface_controller_class/gelneral_page_function/");
	}
	
	public function icon_update_function(){
	   	$xml = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
		foreach($xml->user_interface as $user_interface){
			unlink("app/view/admin/upload/".$user_interface->icon);
		}
       	$icon = $_FILES['icon']['name'];
       	$tmp_name = $_FILES['icon']['tmp_name'];
		foreach($xml->user_interface as $user_interface){
			if($user_interface["id"]=="admin"){
				$user_interface->icon = $icon;
				break;
			}
		}
		move_uploaded_file($tmp_name,"app/view/admin/upload/".$icon);
		file_put_contents("app/view/admin/page_part/user_interface/data.xml",$xml->asXML());
		header("location:".BASE_URL."user_interface_controller_class/icon_page_function/");
	}
	
	public function social_update_function(){
	   	$xml = simplexml_load_file("app/view/admin/page_part/user_interface/data.xml");
       	$facebook = $_POST['facebook'];
       	$twitter = $_POST['twitter'];
       	$linkedin = $_POST['linkedin'];
       	$youtube = $_POST['youtube'];
       	$instagram = $_POST['instagram'];
		foreach($xml->user_interface as $user_interface){
			if($user_interface["id"]=="admin"){
				$user_interface->facebook = $facebook;
				$user_interface->twitter = $twitter;
				$user_interface->linkedin = $linkedin;
				$user_interface->youtube = $youtube;
				$user_interface->instagram = $instagram;
				break;
			}
		}
		file_put_contents("app/view/admin/page_part/user_interface/data.xml",$xml->asXML());
		header("location:".BASE_URL."user_interface_controller_class/social_page_function/");
	}
	
	
	
	
	
	
	
	
	
}
?>
	