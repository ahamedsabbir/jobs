
<?php
class admin_exam_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::checkSession();
	} 


	public function main_page_function(){
	
        $post_data_array = array();
		$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		
		
		$post_data_array['all_data'] = $modelname->select_all_model_desc('question_table');
		$post_data_array['department_name'] = $modelname->select_all_model("que_department_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/exam/post_loop", $post_data_array);
		
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	
	}


	public function create_question_function(){
        $post_data_array = array();
		$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$post_data_array['department'] = $modelname->select_all_model("que_department_table");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		if(session::get('name') != null){	
			$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
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
			header("Location:".BASE_URL."admin_exam_controller_class");    
		}else{
			$msg['insert_error'] = 'Question Alrady Have';
			$urlmsg = BASE_URL."admin_exam_controller_class/create_question_function/&msg=".urlencode(serialize($msg));
        	header("Location:$urlmsg");
		}
	}
	
	
	
	
	
	
	
	
	public function delete_que_function($unique_id){
        $data_array = array();
        $modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
        $modelname->delete_post_by_unique_id("question_table", $unique_id);
        $modelname->delete_post_by_unique_id("answer_table", $unique_id);
		header("Location:".BASE_URL."admin_exam_controller_class");  
        
	}
	
	
	
	
	public function delete_all_data_function(){
        $modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
        $modelname->delete_all_method("text_result_table");
		header("Location:".BASE_URL."admin_home_page_controller_class");  
        
	}
	
	public function update_page_function($unique_id){
		$post_data_array = array();
		
		$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		
		
		$post_data_array['department'] = $modelname->select_all_model("que_department_table");
		$post_data_array["get_queasion_info"] = $modelname->select_by_unique_id_function("question_table", $unique_id);
		$post_data_array["get_answer_info"] = $modelname->select_by_unique_id_function("answer_table", $unique_id);
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/exam/update", $post_data_array);
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
		
        
	}
	
	
	public function queasion_update_function($unique_id){
		$model_object = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");

		$update_by = "unique_id=:unique_id";

		$update_que_array =  array(
							'unique_id' => $unique_id,
							'question' => $_POST['question'],
							'department_id' => $_POST['department_id']
						);


		$update_result = $model_object->que_ans_update_function("question_table", $update_que_array, $update_by);
		$model_object->delete_post_by_unique_id("answer_table", $unique_id);

		if($update_result == 1){
			$ans = array();
			$ans[1] = $_POST['ans_1'];
			$ans[2] = $_POST['ans_2'];
			$ans[3] = $_POST['ans_3'];
			$ans[4] = $_POST['ans_4'];
			foreach($ans as $key => $value){
				if($key == $_POST['right_ans']){
					$insert_ans_array = array(
						"unique_id" => $unique_id,
						"right_ans" => 1,
						"answer" => $value
					);
					$model_object->insert_model('answer_table', $insert_ans_array);	
				}else{
					$insert_ans_array = array(
						"unique_id" => $unique_id,
						"answer" => $value
					);
					$model_object->insert_model('answer_table', $insert_ans_array);
				}

			}

		}

		header("Location:".BASE_URL."admin_exam_controller_class/single_queastion_function/".$unique_id);
       
	
	}
	public function approve_que_function($unique_id){
		$update_by = "unique_id=:unique_id";
		$update_que_array =  array(
			'unique_id' => $unique_id,
			'status' => 1
		);
		$model_object = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$model_object->que_ans_update_function("question_table", $update_que_array, $update_by);
		header("Location:".BASE_URL."admin_exam_controller_class/single_queastion_function/".$unique_id);
	}
	
	public function unapprove_que_function($unique_id){
		$update_by = "unique_id=:unique_id";
		$update_que_array =  array(
			'unique_id' => $unique_id,
			'status' => 0
		);
		$model_object = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		$model_object->que_ans_update_function("question_table", $update_que_array, $update_by);
		header("Location:".BASE_URL."admin_exam_controller_class/single_queastion_function/".$unique_id);
	}
	
	
	
	public function single_queastion_function($unique_id){
		$post_data_array = array();
		
		$modelname = $this->page_model_validation_object_array->model_load_function("exam_db_model_class");
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_head");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_header");
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_side_nav");
		
		
		$post_data_array['department'] = $modelname->select_all_model("que_department_table");
		$post_data_array["question"] = $modelname->select_by_unique_id_function("question_table", $unique_id);
		$post_data_array["answer"] = $modelname->select_by_unique_id_function("answer_table", $unique_id);
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/exam/single_question", $post_data_array);
		
		
		$this->page_model_validation_object_array->page_load_function("admin/page_part/home_page_footer");
	}
	
}
	
?>