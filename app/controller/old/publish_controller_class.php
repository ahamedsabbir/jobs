<?php
/**
* controller এর এটা home_page function থাকবেই।
* page এর নামের সাথে _function যুক্ত করে function বানাব যাতে load করতে সুবি্ধা হয়।
*/
class publish_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	}
    
    
    
    
    
    
    
    
    
	public function home_page_function($page_name){
		$data = array();
		$data_table_name_01 = "category";
		$data_table_name_02 = "post";
		$select_all = $this->page_model_load_array->model_name_function("publish_db_model_class");		
		$data['select_side'] = $select_all->select_side_menu($data_table_name_01);
        
		$data['select_all_post'] = $select_all->select_all_by_limit($data_table_name_02);
        
		$this->page_model_load_array->publish_view_page_name_function($page_name, $data);
	}
	
    
    
    
    
    
    
    
    
    
    
    
	public function full_post_page_function($get_id_by_post){
        $page_name = "full_post_page";
		$data = array();
		$data_table_name_01 = "category";
		$data_table_name_02 = "post";
		$select_all = $this->page_model_load_array->model_name_function("admin_publish_db_model_class");
		//$data['select_side'] = $select_all->select_side_menu($data_table_name_01);
		$data['select_post'] = $select_all->select_post_by_id($data_table_name_02, $get_id_by_post);
		$this->page_model_load_array->publish_view_page_name_function($page_name, $data);
	}
    
    
    
    public function cat_post_page_function($get_id_by_post){
		$data_array = array();
		$data_table_name_01 = "category";
		$select_all = $this->page_model_load_array->model_name_function("admin_publish_db_model_class");
		$data_array['select_post'] = $select_all->get_data_by_cat_id("post", "category", $get_id_by_post);
		$this->page_model_load_array->publish_view_page_name_function("cat_post_page", $data_array);
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>