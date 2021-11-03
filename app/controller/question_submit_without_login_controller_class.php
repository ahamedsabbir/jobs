<?php
class question_submit_without_login_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::init();
	} 


	public function main_page_function(){
		$post_data_array = array();
		$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$post_data_array['department'] = $modelname->select_all_model("que_department_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		if(session::get('name') != null){	
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		}else{
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_alt_header");
		}
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		$post_data_array['count_row'] = $modelname->row_count_model("question_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/exam/insert", $post_data_array);
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
	
	
	
   public function insert_function(){
		$post_data_array = array();
      	$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$count_row = $modelname->row_count_que_model('question_table', $_POST['question']);
		if($count_row == 0){	
			$insert_question_array = array(
				"unique_id" => $_POST['unique_id'],
				"department_id" => $_POST['department'],
				"question" => $_POST['question'],
				"name" => session::get("name") != null ? session::get("name") : $_POST['name']
			);
			$question_result = $modelname->insert_model('question_table', $insert_question_array);

			if($question_result == 1){
				$ans = array();
				$ans[1] = $_POST['ans_1'];
				$ans[2] = $_POST['ans_2'];
				$ans[3] = $_POST['ans_3'];
				$ans[4] = $_POST['ans_4'];
				foreach($ans as $key => $value){
					if($key == $_POST['right_ans']){
						$insert_ans_array = array(
							"unique_id" => $_POST['unique_id'],
							"right_ans" => 1,
							"answer" => $value
						);
						$modelname->insert_model('answer_table', $insert_ans_array);	
					}else{
						$insert_ans_array = array(
							"unique_id" => $_POST['unique_id'],
							"answer" => $value
						);
						$modelname->insert_model('answer_table', $insert_ans_array);
					}

				}

			}
			header("Location:".BASE_URL."question_submit_without_login_controller_class");    
		}else{
			$msg['insert_error'] = 'Question Alrady Have';
			$urlmsg = BASE_URL."question_submit_without_login_controller_class/&msg=".urlencode(serialize($msg));
        	header("Location:$urlmsg");
		}
	}
	
	
	
}	
?>