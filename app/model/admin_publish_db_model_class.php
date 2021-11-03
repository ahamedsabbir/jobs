<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class admin_publish_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	function select_post_by_id($data_table_name, $data_id_name){
		$sql = "SELECT * FROM $data_table_name WHERE id=:id";
		$data = array(":id" => $data_id_name);
		return $this->db_array->select_function($sql, $data);
	}
    
    
    
    
    public function get_data_by_cat_id($table_01, $table_02, $cat_id){
        $sql = "SELECT $table_01.*, $table_02.* FROM $table_01 INNER JOIN $table_02 ON $table_01.post_category = $table_02.cat_name WHERE $table_01.cat_id='$cat_id'";
        return $this->db_array->select_function($sql);
    }
    
    
    
    
    

}
?>