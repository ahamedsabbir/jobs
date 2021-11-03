<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class exam_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	
	function row_count_model($data_table_name){
        $sql = "SELECT * FROM $data_table_name WHERE 1";
		return $this->db_array->affectedRows($sql);
	}
	
	function insert_model($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
    }
	

    function select_all_model($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->select_function($sql);
    }
	
	
	
	
	
	
	
	
	
	
	
    function random_select_model($data_table_name, $list){
        $sql = "SELECT * FROM $data_table_name WHERE department_id IN ($list) AND status=1 ORDER BY RAND() LIMIT 50";
		return $this->db_array->select_function($sql);
    }
	
    function delete_post_by_unique_id($table_name, $unique_id){
        return $this->db_array->delete_unique_id_function($table_name, $unique_id);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    function select_10_model($data_table_name){
		$id = cookie::get('id');
        $sql = "SELECT * FROM $data_table_name WHERE user_id = {$id} ORDER BY ID DESC LIMIT 10";
		return $this->db_array->select_function($sql);
    }
	
	
	
	
	
   function select_all_model_desc($data_table_name){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC";
		return $this->db_array->select_function($sql);
    }
   public function join_query_model($table_01, $table_02){
        $sql = "SELECT $table_01.*, $table_02.* FROM $table_01 INNER JOIN $table_02 ON $table_01.user_id = $table_02.id ORDER BY TOTAL_SUM DESC";
        return $this->db_array->select_function($sql);
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
   function select_all_by_coockie($data_table_name){
	   	$id = cookie::get('id');
        $sql = "SELECT * FROM $data_table_name WHERE user_id={$id} ORDER BY ID DESC";
		return $this->db_array->select_function($sql);
    }
	
	
	function row_count_que_model($data_table_name, $question){
        $sql = "SELECT * FROM $data_table_name WHERE question=:question";
        $data = array(":question" => $question);
		return $this->db_array->affectedRows($sql, $data);
	}
	
	
	function get_row_by_cat_function($data_table_name, $department_id){
        $sql = "SELECT * FROM $data_table_name WHERE department_id=:department_id";
        $data = array(":department_id" => $department_id);
		return $this->db_array->affectedRows($sql, $data);
	}
	
	
	
   function delete_all_method($table_name){
        return $this->db_array->delete_all_function($table_name);
	}
	
	
	function select_by_unique_id_function($data_table_name, $unique_id){
        $sql = "SELECT * FROM $data_table_name WHERE unique_id=:unique_id";
        $data = array(":unique_id" => $unique_id);
		return $this->db_array->select_function($sql, $data);
	}
	
	
    function que_ans_update_function($table_name, $update_data_array, $update_by){
		return $this->db_array->update_function($table_name, $update_data_array, $update_by);
	}
	
	
	
	
}	
?>