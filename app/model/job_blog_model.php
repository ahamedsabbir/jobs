<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class job_blog_model extends main_model_class{
	function __construct(){
		parent::__construct();
	}
//prev next pagination
	function select_5_post($data_table_name, $start, $limit){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $start, $limit";
		return $this->db_array->select_function($sql);
    } 
    function pagenation_row_count_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->affectedRows($sql);
	}
	
	
	
	
	
	
	
	
	
	
	
	

	function select_post_by_id($data_table_name, $data_id_name){
		$sql = "SELECT * FROM $data_table_name WHERE id=:id";
		$data = array(":id" => $data_id_name);
		return $this->db_array->select_function($sql, $data);
	}

	function get_comment_function($table_comment, $table_user, $post_id, $start, $limit){
		$sql = "SELECT $table_comment.*, $table_user.* FROM $table_comment INNER JOIN $table_user ON $table_comment.user_id = $table_user.id WHERE $table_comment.post_id=:post_id LIMIT $start, $limit";
		$data = array(":post_id" => $post_id);
		return $this->db_array->select_function($sql, $data);
    }
	function pagenation_comment_row_count_function($data_table_name, $post_id){
        $sql = "SELECT * FROM $data_table_name WHERE post_id = $post_id";
		return $this->db_array->affectedRows($sql);
    }
	

	
	
	
	
	
	
	
	
	
	function select_by_post_com_model($table_comment, $table_user, $post_id, $com_id){
		$sql = "SELECT $table_comment.*, $table_user.* FROM $table_comment INNER JOIN $table_user ON $table_comment.user_id = $table_user.id WHERE $table_comment.com_id=:com_id";
		$data = array(":com_id" => $com_id);
		return $this->db_array->select_function($sql, $data);
    }
	
	
	function get_sub_comment_function($table_sub_comment, $table_user, $com_id, $start, $limit){
		$sql = "SELECT $table_sub_comment.*, $table_user.* FROM $table_sub_comment INNER JOIN $table_user ON $table_sub_comment.user_id = $table_user.id WHERE $table_sub_comment.com_id=:com_id LIMIT $start, $limit";
		$data = array(":com_id" => $com_id);
		return $this->db_array->select_function($sql, $data);
    }
	
	function pagenation_reply_row_count_function($data_table_name, $com_id){
        $sql = "SELECT * FROM $data_table_name WHERE com_id = $com_id";
		return $this->db_array->affectedRows($sql);
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//search pagenation desc
    public function search_job_post_function($table, $keyword, $start, $item){
		$sql = "SELECT * FROM $table WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%' ORDER BY ID DESC LIMIT $start, $item";
        return $this->db_array->select_function($sql);
    }
    function pagenation_search_count_function($table, $keyword){
		$sql = "SELECT * FROM $table WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
		return $this->db_array->affectedRows($sql);
    }
	
//select all method	
    function select_all_post_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->select_function($sql);
    }
	
	
	
//prev next pagination by id
	function select_5_by_id_post_method($data_table_name, $start, $limit, $cat_id){
		$sql = "SELECT * FROM $data_table_name WHERE job_category_id=:job_category_id ORDER BY ID DESC LIMIT $start, $limit";
		$data = array(":job_category_id" => $cat_id);
		return $this->db_array->selectUser($sql, $data);
	}
    function pagenation_row_count_by_id_function($data_table_name, $cat_id){
        $sql = "SELECT * FROM $data_table_name WHERE job_category_id = $cat_id";
		return $this->db_array->affectedRows($sql);
    }	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function select_all_by_dep_id($que_table, $ans_table, $department_id){
		$sql = "SELECT $que_table.*, $ans_table.* FROM $que_table INNER JOIN $ans_table ON $que_table.unique_id = $ans_table.unique_id WHERE $que_table.department_id=:department_id";
		$data = array(":department_id" => $department_id);
		return $this->db_array->select_function($sql, $data);
	}
	

	
	
    public function related_post_method($table, $job_category_id){
		$sql = "SELECT * FROM $table WHERE job_category_id=:job_category_id ORDER BY ID DESC LIMIT 0, 4";
		$data = array(":job_category_id" => $job_category_id);
        return $this->db_array->select_function($sql, $data);
    }
	
	
    public function select_all_by_sn_model($table){
		$sql = "SELECT * FROM $table ORDER BY SN";
        return $this->db_array->select_function($sql);
    }

	
	
	
	function publish_insert_function($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
    }
	
    function row_count_by_session($data_table_name, $session_id){
        $sql = "SELECT * FROM $data_table_name WHERE session_id=:session_id";
        $data = array(":session_id" => $session_id);
		return $this->db_array->affectedRows($sql, $data);
    }	
	
	
    function publish_update_function($table_name, $update_data_array, $update_by){
		return $this->db_array->update_function($table_name, $update_data_array, $update_by);
	}
	
	
    function row_count_by_cookie($data_table_name, $cookie, $post_id){
        $sql = "SELECT * FROM $data_table_name WHERE user_id=:user_id AND post_id=:post_id";
        $data = array(":user_id" => $cookie, ':post_id' => $post_id);
		return $this->db_array->affectedRows($sql, $data);
    }
	
	
	
	
	
	
}
?>