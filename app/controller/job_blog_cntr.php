<?php

class job_blog_cntr extends main_controller_class{
	public $result_array = array();
	
	
	
	public function __construct(){
		parent::__construct();
		$database = simplexml_load_file("system/database.xml");
		foreach($database->database as $database){
			if(empty($database->db_name) or empty($database->db_host) or empty($database->db_user) or empty($database->db_password)){
				header("location:".BASE_URL."database_controller_class/before_update_page_function/");
			}
		}
		session::init();
	}   
	public function main_page_function(){
        $page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";
				
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$item = isset($_GET['item']) ? $_GET['item'] : 5;
		$page_data_array['get_5_post'] = $model_object->select_5_post("job_post_table", $start, $item);
		
		$page_data_array['pagenation'] = $model_object->pagenation_row_count_function("job_post_table");

		
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");

		$row_count = $model_object->row_count_by_session('daily_visitor_table', session::id());
		if($row_count == 0){
			$insert_data = array(
				'ip_address' => $_SERVER["SERVER_ADDR"],
				'browser_info' => $_SERVER["HTTP_USER_AGENT"],
				'session_id' => session::id()
			);
			$model_object->publish_insert_function('daily_visitor_table', $insert_data);
		}

		$this->page_model_validation_object_array->page_load_function("job_blog/index", $page_data_array);
	}
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    public function single_page_function($post_id){
		if(!isset($post_id)){
            header("location:".BASE_URL."job_blog_cntr");
        }
        $page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";
		$page_data_array['post_id'] = $post_id;
		
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
//single post view
		$page_data_array['single_post'] = $model_object->select_post_by_id("job_post_table", $post_id);
//comment pagination
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$page_data_array["comment_view"] = $model_object->get_comment_function("job_comment_table", "user_login_table", $post_id, $start, LOOP_ITEM*4);
		$page_data_array['pagenation'] = $model_object->pagenation_comment_row_count_function("job_comment_table", $post_id);

		
		
		
//related post
		$job_category_id = $page_data_array['single_post'][0]['job_category_id'];
		$page_data_array['related_post'] = $model_object->related_post_method("job_post_table", $job_category_id);
		
		
		
		
//watch insert	update	
		$insert_data_array = array(
			'post_id' => $post_id,
			'session_id' => session::id(),
			'browser_info' => $_SERVER["HTTP_USER_AGENT"],
			'ip_address' => $_SERVER["SERVER_ADDR"],
			'watch_count' => 1
		);
		$model_object->publish_insert_function('post_watch_table', $insert_data_array);
		$update_by = "id=:id";
		$total_watch = $page_data_array['single_post'][0]['total_watch']+1;
		$update_data_array = array(
								'id' => $post_id,
								'total_watch' => $total_watch
                            );
		$model_object->publish_update_function("job_post_table", $update_data_array, $update_by);

		$this->page_model_validation_object_array->page_load_function("job_blog/post", $page_data_array);	
	}
	
	
	
	
	public function like_function($post_id){
		if(cookie::get('id') == null){
            header("location:".BASE_URL."job_blog_cntr/single_page_function/".$post_id);
        }else{
			$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
			$page_data_array['single_post'] = $model_object->select_post_by_id("job_post_table", $post_id);
			$row_count = $model_object->row_count_by_cookie('post_like_table', cookie::get('id'), $post_id);
			echo $row_count;
			if($row_count == 0){
				$insert_data_array = array(
					'post_id' => $post_id,
					'session_id' => session::id(),
					'user_id' => cookie::get('id'),
					'browser_info' => $_SERVER["HTTP_USER_AGENT"],
					'ip_address' => $_SERVER["SERVER_ADDR"],
					'like_count' => 1
				);
				$model_object->publish_insert_function('post_like_table', $insert_data_array);

				$update_by = "id=:id";
				$total_like = $page_data_array['single_post'][0]['total_like']+1;
				$update_data_array = array(
										'id' => $post_id,
										'total_like' => $total_like
									);
				$model_object->publish_update_function("job_post_table", $update_data_array, $update_by);
				header("location:".BASE_URL."job_blog_cntr/single_page_function/".$post_id);
			}else{

				header("location:".BASE_URL."job_blog_cntr/single_page_function/".$post_id);
			}
		}
	
	}
	
	
	
	
	
	
	
	
	public function post_comment_method(){
		if(cookie::get('login') == 1){
			$insert_data = array(
			'user_id' => $_POST["user_id"],
			'post_id' => $_POST["post_id"],
			'comment' => $_POST["comment"]);
			$model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
			header("location:".BASE_URL."job_blog_cntr/single_page_function/".$_POST["post_id"]);
			$model_name->publish_insert_function("job_comment_table", $insert_data);
			header("location:".BASE_URL."job_blog_cntr/single_page_function/".$_POST["post_id"]);
		}else{
			header("location:".BASE_URL."job_blog_cntr/single_page_function/".$_POST["post_id"]."/&msg=You must sign up after comment.");
		}
			
	}
	
	
	
	public function reply_page_method($post_id){
		if(!isset($post_id)){
            header("location:".BASE_URL."job_blog_cntr");
        }
        $page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";
		$page_data_array['post_id'] = $post_id;
		$com_id = $_GET['com_id'];
		
		
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
		$page_data_array['single_post'] = $model_object->select_post_by_id("job_post_table", $post_id);
		
		$page_data_array["comment_view"] = $model_object->select_by_post_com_model("job_comment_table", "user_login_table", $post_id, $com_id);
		
		
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$page_data_array["sub_comment_view"] = $model_object->get_sub_comment_function("job_sub_comment_table", "user_login_table", $com_id, $start, LOOP_ITEM*4);
		
		$page_data_array['pagenation'] = $model_object->pagenation_reply_row_count_function("job_sub_comment_table", $com_id);
		
		
		$this->page_model_validation_object_array->page_load_function("job_blog/reply", $page_data_array);
	}
	
	
	
    public function sub_comment_method(){
		if(cookie::get('login') == 1){
			$insert_data = array(
			'user_id' => $_POST["user_id"],
			'post_id' => $_POST["post_id"],
			'com_id' => $_POST["com_id"],
			'sub_comment' => $_POST["sub_comment"]);
			$model_name = $this->page_model_validation_object_array->model_load_function("publish_db_model_class");
			$model_name->publish_insert_function("job_sub_comment_table", $insert_data);
			header("location:".BASE_URL."job_blog_cntr/reply_page_method/".$_POST['post_id']."/&com_id=".$_POST['com_id']);
		}else{
			header("location:".BASE_URL."job_blog_cntr/reply_page_method/".$_POST['post_id']."/&com_id=".$_POST['com_id']."&msg=You must sign up after reply.");
		}
	}
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function about_method(){
		$page_data_array = array();
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("job_blog/about", $page_data_array);	
	}
    
    
	public function job_search_method(){
		$page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";		
		$page_data_array['keyword'] = $_REQUEST['keyword'];	
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$item = isset($_GET['item']) ? $_GET['item'] : 5; 
		$page_data_array['send_search_result'] = $model_object->search_job_post_function("job_post_table", $page_data_array['keyword'], $start, $item); 		
		
		$page_data_array['pagenation'] = $model_object->pagenation_search_count_function("job_post_table", $page_data_array['keyword']);
		
		
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("job_blog/search", $page_data_array);	
	}
    
    
    
    
	public function category_post_function(){
        $page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";
		$page_data_array['cat_id'] = $_REQUEST['cat_id'];	
		
		
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		
		
		$start = isset($_GET['start']) ? $_GET['start'] : 0;
		$item = isset($_GET['item']) ? $_GET['item'] : 5;
		$page_data_array['get_5_post_by_id'] = $model_object->select_5_by_id_post_method("job_post_table", $start, $item, $page_data_array['cat_id']);
		
		$page_data_array['pagenation'] = $model_object->pagenation_row_count_by_id_function("job_post_table", $page_data_array['cat_id']);
		
		
		
		
		$page_data_array['job_cat_id'] = $model_object->select_post_by_id("job_cat_table", $page_data_array['cat_id']);
		$page_data_array['cat_icon'] = $page_data_array['job_cat_id'][0]['cat_icon'];
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("job_blog/category", $page_data_array);
	}
    
    
	
	
	
	
	
	
	
	
	
	
	public function pre_exam_page_function(){
        $page_data_array = array();
		$model_object_01 = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$model_object_02 = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object_02->select_all_post_function("job_cat_table");
		$page_data_array['department_no'] = $model_object_02->select_all_post_function("que_department_table");
		
		
		foreach($page_data_array['department_no'] as $key => $value){
			//$page_data_array['get_row_by_cat'][$value['dep_name']] = $model_object_01->get_row_by_cat_function("question_table", $value['department_id']);
			$page_data_array['get_row_by_cat'][$value['dep_name']] = array(
				"id" => $value['department_id'],
				"count" => $model_object_01->get_row_by_cat_function("question_table", $value['department_id'])
			);
			
			
			
			
		}
		//print_r($page_data_array['get_row_by_cat']);
		
		$this->page_model_validation_object_array->page_load_function("job_blog/pre_exam", $page_data_array);
	}
    
	
	
	
	
	
	
	public function cat_que_page_function($dep_id){
        $page_data_array = array();
		$model_object_01 = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object_01->select_all_post_function("job_cat_table");
		$page_data_array['show_by_dep'] = $model_object_01->select_all_by_dep_id("question_table", "answer_table", $dep_id);
		
		
		
		$this->page_model_validation_object_array->page_load_function("job_blog/cat_que_view", $page_data_array);
	}
	
	
	
	
	
	
	
	
	
	public function exam_page_function(){
		$list = implode($_REQUEST["department_id"],", ");
			
			
        $page_data_array = array();
		$model_object_01 = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$model_object_02 = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object_02->select_all_post_function("job_cat_table");
		
		$page_data_array['question'] = $model_object_01->random_select_model('question_table', $list);
		$page_data_array['answer'] = $model_object_01->select_all_model('answer_table');
		$i = 1;
		foreach($page_data_array['question'] as $que_key => $que_value){
			foreach($page_data_array['answer'] as $ans_key => $ans_value){
					if($que_value['unique_id'] == $ans_value['unique_id'] and $ans_value['right_ans'] == 1){
							$this->result_array[$i++] = $ans_value['answer'];
					}
			} 
		}
		session::set('right_answer', $this->result_array);
		$this->page_model_validation_object_array->page_load_function("job_blog/exam", $page_data_array);
	}
    
    
	
	
	
	
	
	
	
    
	public function mark_insert_function(){
		if(cookie::get('login') == 0){
			header("location:".BASE_URL."job_blog_cntr/public_result_page_function/");
		}else{
			$page_data_array = array();
			$model_object = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
			$model_object_two = $this->page_model_validation_object_array->model_load_function("job_blog_model");
			$page_data_array['job_cat'] = $model_object_two->select_all_post_function("job_cat_table");
			$page_data_array['question'] = $model_object->select_all_model('question_table');
			$page_data_array['old_total'] = $model_object->select_all_by_coockie("text_result_table");
			$old_total = $page_data_array['old_total'][0]['total_sum'];
			$i=0;
			foreach($page_data_array['question'] as $key => $value){
				if(isset($_POST[$value['unique_id']])){
					$i = $i + $_POST[$value['unique_id']];	
				}
			}
			$insert_question_array = array(
				"session_id" => session::id(),
				"user_id" => cookie::get('id'),
				"total_mark" => $i,
				"total_sum" => $old_total+$i
			);
			session::set('exam_result', $i);
			$model_object->insert_model('text_result_table', $insert_question_array);
			header("location:".BASE_URL."job_blog_cntr/result_page_function/");
		}
		
	}
    
	public function result_page_function(){
		$model_object_two = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object_two->select_all_post_function("job_cat_table");
		$this->page_model_validation_object_array->page_load_function("job_blog/result", $page_data_array);
	}
	
	
	
	
	
	public function public_result_page_function(){
        $page_data_array = array();
		$page_data_array["title"] = "job post web site";
		$page_data_array["meta"] = "job post web site";
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object->select_all_post_function("job_cat_table");
		$model_object_02 = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		
		
		$page_data_array["all_data"] = $model_object_02->join_query_model('text_result_table', 'user_login_table');
		
		
		
		$this->page_model_validation_object_array->page_load_function("job_blog/public_result", $page_data_array);
	}
    
    
	public function blog_cal_controller_class(){
        $page_data_array = array();
		
		$model_object = $this->page_model_validation_object_array->model_load_function("job_blog_model");
		$page_data_array['job_cat'] = $model_object->select_all_by_sn_model("job_cat_table");
		
		$model_object_02 = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		
		
		$page_data_array["all_data"] = $model_object_02->join_query_model('text_result_table', 'user_login_table');
		
		
		
		$this->page_model_validation_object_array->page_load_function("job_blog/blog_cat", $page_data_array);
	}
    
    
    
}
?>