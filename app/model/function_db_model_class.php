<?php
class all_function_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}


	function insert_model($data_table_name, $insert_data){
		return $this->db_array->insert($data_table_name, $insert_data);
    }
	
    function update_model($table_name, $update_data_array, $update_by){
		return $this->db_array->update_function($table_name, $update_data_array, $update_by);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>