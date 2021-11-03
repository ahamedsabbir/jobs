<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class loop_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	
	
	
/*
* Prev-Next Pagination Model.
*/
	function select_prev_next_pagination_model($data_table_name, $start, $limit){
        $sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $start, $limit";
		return $this->db_array->select_function($sql);
    } 
    function pagenation_row_count_function($data_table_name){
        $sql = "SELECT * FROM $data_table_name";
		return $this->db_array->affectedRows($sql);
    }
	
/*
* number Pagination Model.
*/
    public function number_pagination_select_model($data_table_name, $start, $item){
		$sql = "SELECT * FROM $data_table_name ORDER BY ID DESC LIMIT $start, $item";
        return $this->db_array->select_function($sql);
    }
    function number_pagenation_row_count_model($data_table_name){
		$sql = "SELECT * FROM $data_table_name";
		return $this->db_array->affectedRows($sql);
    }

	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>