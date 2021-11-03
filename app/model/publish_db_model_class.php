<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class publish_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	function select_all_function($data_table_name){
		$sql = "SELECT * FROM $data_table_name";
		return $this->db_array->select_function($sql);
	}
    
    
   
    function select_all_by_desc_function($data_table_name){
		$sql = "SELECT * FROM $data_table_name ORDER BY ID DESC";
		return $this->db_array->select_function($sql);
	}
    
    
    function select_all_by_limit($data_table_name, $limit_count){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $limit_count";
        return $this->db_array->select_function($sql);
	}
    
    function select_post_by_id($data_table_name, $data_id_name){
		$sql = "SELECT * FROM $data_table_name WHERE id=:id";
		$data = array(":id" => $data_id_name);
		return $this->db_array->select_function($sql, $data);
	}
    public function get_data_by_cat_id($post_table, $cat_table, $post_cat_id){
        $sql = "SELECT $post_table.*, $cat_table.* FROM $post_table INNER JOIN $cat_table ON $post_table.job_cat_id = $cat_table.id WHERE $cat_table.id='$post_cat_id'";
        return $this->db_array->select_function($sql);
    }
    
    

    //pagenation desc
    function select_post_pagenation_function($data_table_name, $page_count){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $page_count,5";
		return $this->db_array->select_function($sql);
    }   
    function pagenation_row_count_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name WHERE 1";
		return $this->db_array->affectedRows($sql);
    }

    
    
    //search pagenation desc
    public function searchModel($table, $keyword, $keyid, $page_count){
        if(isset($keyword) && !empty($keyword)){
            $sql = "SELECT * FROM $table WHERE post_title LIKE '%$keyword%' OR post_content LIKE '%$keyword%' ORDER BY ID DESC LIMIT $page_count,5";
        }elseif(isset($keyid)){
            $sql = "SELECT * FROM $table ORDER BY ID DESC LIMIT $page_count,5 WHERE job_cat_id = $keyid";
        }
        return $this->db_array->select_function($sql);
    }
    function pagenation_search_count_function($table, $keyword, $keyid, $page_count){
        if(isset($keyword) && !empty($keyword)){
            $sql = "SELECT * FROM $table WHERE post_title LIKE '%$keyword%' OR post_content LIKE '%$keyword%' ORDER BY ID DESC LIMIT $page_count,5";
        }elseif(isset($keyid)){
            $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $page_count,5 WHERE job_cat_id = $keyid";
        }
		return $this->db_array->affectedRows($sql);
    }


	function publish_insert_function($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
    }

	
	
	
	
//commentget_comment_function
	function get_comment_function($table_comment, $table_user, $post_id, $start, $limit){
		$sql = "SELECT $table_comment.*, $table_user.* FROM $table_comment INNER JOIN $table_user ON $table_comment.user_id = $table_user.id WHERE $table_comment.post_id='$post_id' LIMIT $start, $limit";
		$data = array(":post_id" => $post_id);
		return $this->db_array->select_function($sql, $data);
    }
		function get_sub_comment_function($table_comment, $table_user, $post_id){
		$sql = "SELECT $table_comment.*, $table_user.* FROM $table_comment INNER JOIN $table_user ON $table_comment.user_id = $table_user.id WHERE $table_comment.post_id='$post_id'";
		$data = array(":post_id" => $post_id);
		return $this->db_array->select_function($sql, $data);
    }
	function pagenation_comment_row_count_function($data_table_name, $post_id){
        $sql = "SELECT * FROM $data_table_name WHERE post_id = $post_id";
		return $this->db_array->affectedRows($sql);
    }


	
	
	
	
	
	
	
	
	
	
	
	
}
?>