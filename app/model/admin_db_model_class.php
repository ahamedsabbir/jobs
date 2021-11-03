<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class admin_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	function admin_insert_function($data_table_name, $insert_data){
		return $this->db_array->insert_function($data_table_name, $insert_data);
    }
    
    function select_all_post_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->select_function($sql);
    }
   
	
	
	
	
	
	
//pagenation  
    function select_post_pagenation_function($data_table_name, $start, $limit){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $start, $limit";
		return $this->db_array->select_function($sql);
    }   
    function pagenation_row_count_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->affectedRows($sql);
    }
    
    
    
	
	
	
	
	
	
	
	
    function admin_update_function($table_name, $update_data_array, $update_by){
		return $this->db_array->update_function($table_name, $update_data_array, $update_by);
	}
    
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    function delete_model_function($table_name, $delete_by_id){
        return $this->db_array->delete_by_id_function($table_name, $delete_by_id);
	}
    
	
	
	
	
	
    function select_post_by_id($data_table_name, $data_id_name){
		$sql = "SELECT * FROM $data_table_name WHERE id=:id";
		$data = array(":id" => $data_id_name);
		return $this->db_array->select_function($sql, $data);
	}
    
    
    
    function row_count_function_for_status($data_table_name, $status){
        $sql = "SELECT * FROM $data_table_name WHERE status=:status";
        $data = array(":status" => $status);
		return $this->db_array->affectedRows($sql, $data);
    }

    
    
    
    
    
}
?>