<?php
/**
* controller এর এটা home_page function থাকবেই।
*/
class admin_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	}
    
    
    
    
	public function home_page_function($page_name){
		$this->page_model_load_array->admin_view_page_name_function($page_name);
	}
    
    
    
    
    
  //done  
	public function create_post_page_function($page_name){
		$data_table_name_01 = "post";
		if(isset($_POST['submit'])){
            $post_date = $_POST["post_date"];
            $admin_name = $_POST["admin_name"];
            $post_category = $_POST["post_category"];
            $post_title = $_POST["post_title"];
            $post_content = $_POST["post_content"];

            $insert_data_array = array(
                'post_date' => $post_date,
                'admin_name' => $admin_name,
                'post_category' => $post_category,
                'post_title' => $post_title,
                'post_content' => $post_content
            );
            $insert_all = $this->page_model_load_array->model_name_function("admin_db_model_class");
            $insert_result = $insert_all->admin_insert_function($data_table_name_01, $insert_data_array);
            $msg_array = array();
            if($insert_result == 1){
                $msg_array['insert_msg'] = "successfull";
            }else{
                $msg_array['insert_msg'] = "fail";
            }
            $this->page_model_load_array->admin_view_page_name_function($page_name, $msg_array);
        }else{
            $this->page_model_load_array->admin_view_page_name_function($page_name);
        }
    }
    
    
    
    
    
    public function view_all_post_function($page_name){
        $send_data_to_page = array();
		$data_table_name_01 = "post";
		$select_all = $this->page_model_load_array->model_name_function("admin_db_model_class");
		$send_data_to_page['send_all_post'] = $select_all->select_all_post_function($data_table_name_01);
		$this->page_model_load_array->admin_view_page_name_function($page_name, $send_data_to_page);
    }
    
    
    
    
    public function update_post_page_function($get_id_by_post){
        $msg_array = array();
        $data_table_name_01 = "post";
        $page_name = "update_post_page";
        if(isset($_POST['submit'])){
            $set_id = "id={$get_id_by_post}";
            $post_date = $_POST['post_date'];
            $post_category = $_POST['post_category'];
            $post_title = $_POST['post_title'];
            $post_content = $_POST['post_content'];
            $insert_data_array =  array(
                                'post_date' => $post_date,
                                'post_category' => $post_category,
                                'post_title' => $post_title,
                                'post_content' => $post_content
                            );
            $select_all = $this->page_model_load_array->model_name_function("admin_db_model_class");
            $update_result = $select_all->admin_update_function($data_table_name_01, $insert_data_array, $set_id);
            if($update_result == 1){
                $msg_array['insert_msg'] = "successfull";
            }else{
                $msg_array['insert_msg'] = "fail";
            }
            $this->page_model_load_array->admin_view_page_name_function($page_name,  $msg_array);
        }else{
                $send_data_array_to_page = array();
                $data_table_name_01 = "post";
                $select_all = $this->page_model_load_array->model_name_function("admin_publish_db_model_class");
                $send_data_array_to_page['select_post'] = $select_all->select_post_by_id($data_table_name_01, $get_id_by_post);
                $this->page_model_load_array->admin_view_page_name_function($page_name, $send_data_array_to_page);
        }
        
    }
    
    
    
    
    
    
    public function full_post_vew_page_function($get_id_by_post){
    $page_name = "full_post_vew_page";
    $data = array();
    $data_table_name_01 = "post";
    $select_all = $this->page_model_load_array->model_name_function("admin_publish_db_model_class");
    $data['select_post'] = $select_all->select_post_by_id($data_table_name_01, $get_id_by_post);
    $this->page_model_load_array->admin_view_page_name_function($page_name, $data);
	}
    
    
    
    
    
    
    
    
    public function delete_by_id($get_id_by_page=null){
        $set_id_for_delete = "id=$get_id_by_page";
        $msg_array = array();
        $select_all = $this->page_model_load_array->model_name_function("admin_db_model_class");
        $select_all->delete_model_function("post", $set_id_for_delete);
        $this->page_model_load_array->admin_view_page_name_function("view_all_post");
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>