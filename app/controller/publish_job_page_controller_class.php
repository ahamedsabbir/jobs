<?php

class publish_job_page_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
	} 
    
    
    
    
    
    
	public function main_page_function($page_count=1){
        $send_data_array_to_page = array();
        $model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        
		$this->page_model_validation_object_array->page_load_function("publish/publish_head_part");
		$this->page_model_validation_object_array->page_load_function("publish/publish_header_part");
        
        $send_data_array_to_page['get_search_category'] = $model_name->select_all_by_desc_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_nav_search_part", $send_data_array_to_page);
        if(isset($page_count)){
	       $page_count=($page_count*5)-5;
        }else{
	       $page_count=0;
        }
		$send_data_array_to_page['send_all_post'] = $model_name->select_post_pagenation_function("job_post_table", $page_count);        
		$this->page_model_validation_object_array->page_load_function("publish/job_post/publish_job_post_list_part", $send_data_array_to_page);
		
        $send_data_array_to_page['pagenation'] = $model_name->pagenation_row_count_function("job_post_table");
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_pagenation_part", $send_data_array_to_page);
        
        $send_data_array_to_page['get_category'] = $model_name->select_all_by_desc_function("job_cat_table");
        $this->page_model_validation_object_array->page_load_function("publish/job_post/job_category_part", $send_data_array_to_page);
		$this->page_model_validation_object_array->page_load_function("publish/publish_footer_part");
	}
    
    
    
    
    
    
    
    
    
    
    public function job_search_page_function($page_count=1){
        
        $keyword = $_POST['keyword'];
        $job_cat_id = $_POST['job_cat_id'];
        
        $send_data_array_to_page = array();
        $model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        
		$this->page_model_validation_object_array->page_load_function("publish/publish_head_part");
		$this->page_model_validation_object_array->page_load_function("publish/publish_header_part");
        
        $send_data_array_to_page['get_search_category'] = $model_name->select_all_by_desc_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_nav_search_part", $send_data_array_to_page);
        
        
        
        if(isset($page_count)){
	       $page_count=($page_count*5)-5;
        }else{
	       $page_count=0;
        }
        
		$send_data_array_to_page['send_all_post'] = $model_name->searchModel("job_post_table", $keyword, $job_cat_id, $page_count);        
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_search_part", $send_data_array_to_page);
		
        
        
        
        
        
        
        $send_data_array_to_page['pagenation'] = $model_name->pagenation_search_count_function("job_post_table", $keyword, $job_cat_id, $page_count);
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_pagenation_part", $send_data_array_to_page);
        
        $send_data_array_to_page['get_category'] = $model_name->select_all_by_desc_function("job_cat_table");
        $this->page_model_validation_object_array->page_load_function("publish/job_post/job_category_part", $send_data_array_to_page);
		$this->page_model_validation_object_array->page_load_function("publish/publish_footer_part");
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function job_category_post_page_function($cat_id){
        if(!isset($cat_id)){
            header("location:".BASE_URL."publish_job_page_controller_class");
        }
        $send_data_array_to_page = array();
        $model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
        
		$this->page_model_validation_object_array->page_load_function("publish/publish_head_part");
		$this->page_model_validation_object_array->page_load_function("publish/publish_header_part");
        
        $send_data_array_to_page["job_view"] = $model_name->get_data_by_cat_id("job_post_table", "job_cat_table", $cat_id);
		$this->page_model_validation_object_array->page_load_function("publish/job_post/job_category_post_list_part", $send_data_array_to_page);
        

		

        
        $send_data_array_to_page['get_category'] = $model_name->select_all_by_desc_function("job_cat_table");
        $this->page_model_validation_object_array->page_load_function("publish/job_post/job_category_part", $send_data_array_to_page);
		$this->page_model_validation_object_array->page_load_function("publish/publish_footer_part");
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function job_view_page_function($post_id){
        if(!isset($post_id)){
            header("location:".BASE_URL."publish_job_page_controller_class");
        }
        $send_data_array_to_page = array();
        $model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_header");
        $send_data_array_to_page["job_view"] = $model_name->select_post_by_id("job_post_table", $post_id);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/job_post/post_view", $send_data_array_to_page);
		
		
		
		
		
		
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$item = isset($_GET['item']) ? $_GET['item'] : 10;
		$send_data_array_to_page["comment_view"] = $model_name->get_comment_function("job_comment_table", "user_login_table", $post_id, $start, $item);
		
		$send_data_array_to_page["sub_comment_view"] = $model_name->get_sub_comment_function("job_sub_comment_table", "user_login_table", $post_id);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/job_post/comment", $send_data_array_to_page);
		
		
		$send_data_array_to_page['post_id'] = $post_id;
		$send_data_array_to_page['pagenation'] = $model_name->pagenation_comment_row_count_function("job_comment_table", $post_id);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/job_post/pagenation", $send_data_array_to_page);
		$this->page_model_validation_object_array->page_load_function("publish/page_part/home_page_footer");
	}
    
	public function post_comment_method(){
		$insert_data = array(
        'user_id' => $_POST["user_id"],
        'post_id' => $_POST["post_id"],
        'comment' => $_POST["comment"]);
       	$model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
		$model_name->publish_insert_function("job_comment_table", $insert_data);
		header("location:".BASE_URL."publish_job_page_controller_class/job_view_page_function/".$_POST["post_id"]);
	}

    public function sub_comment_method(){
		$insert_data = array(
        'user_id' => $_POST["user_id"],
        'post_id' => $_POST["post_id"],
        'com_id' => $_POST["com_id"],
        'sub_comment' => $_POST["sub_comment"]);
       	$model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
		$model_name->publish_insert_function("job_sub_comment_table", $insert_data);
		header("location:".BASE_URL."publish_job_page_controller_class/job_view_page_function/".$_POST["post_id"]);
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>