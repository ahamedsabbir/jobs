<?php
/**
*
*/
class database_class extends PDO{
	public function __construct($dsn, $user_name, $password){
		parent::__construct($dsn, $user_name, $password);
	}    
//read method   
 	public function select_function($sql, $data = array()){
		$stmt = $this->prepare($sql);
		foreach($data as $key => $value){
			$stmt->bindParam($key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}   
    public function selectUser($sql, $data = array()){
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
			$stmt->bindValue($key, $value);
		}
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
//insert method  
	public function insert_function($table_name, $insert_data){
		$keys = implode(", ", array_keys($insert_data));
		$values = ":". implode(", :", array_keys($insert_data));
		$sql = "INSERT INTO $table_name($keys) VALUES ($values)";
		$stmt = $this->prepare($sql);
		foreach($insert_data as $key => $value){
			$stmt->bindValue(":".$key, $value, PDO::PARAM_STR);
		}
		return $stmt->execute();
	}
	
	
	
	
//update method
    public function update_function($table_name, $update_data_array, $update_by){
        $updatekeys = NULL;
        foreach($update_data_array as $key => $value){
            $updatekeys .= "{$key} = :{$key}, "; 
        }
        $updatekeys = rtrim($updatekeys,", ");
        $sql = "UPDATE $table_name SET $updatekeys WHERE $update_by";
        $stmt = $this->prepare($sql);
        foreach($update_data_array as $key => $value) {
            $stmt->bindValue(":{$key}", $value);
        }
        return $stmt->execute();
    }
	public function update_code_function($table_name, $code, $id){
        $sql = "UPDATE $table_name SET code=:code WHERE id=:id";
        $stmt = $this->prepare($sql);
		$stmt->bindValue(":code", $code);
		$stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
	public function update_password_function($table_name, $password, $code){
        $sql = "UPDATE $table_name SET password=:password WHERE code=:code";
        $stmt = $this->prepare($sql);
		$stmt->bindValue(":password", $password);
		$stmt->bindValue(":code", $code);
        return $stmt->execute();
    }
	public function update_by_name_function($table_name, $insert_data_array, $set_name){
        $updatekeys = NULL;
        foreach($insert_data_array as $key => $value){
            $updatekeys .= "{$key} = :{$key}, "; 
        }
        $updatekeys = rtrim($updatekeys,", ");
        $sql = "UPDATE $table_name SET $updatekeys WHERE admin_name=:admin_name";
        $stmt = $this->prepare($sql);
        foreach($insert_data_array as $key => $value) {
            $stmt->bindValue(":{$key}", $value);
        }
        $stmt->bindValue(":admin_name", $set_name);
        return $stmt->execute();
    }

//delete method
    public function delete_function($table_name, $set_id, $limit = 1){
        $sql = "DELETE FROM $table_name WHERE $set_id LIMIT $limit";
        $stmt = $this->prepare($sql);
        return $stmt->execute();
    } 
	
    public function delete_unique_id_function($table_name, $unique_id){
        $sql = "DELETE FROM $table_name WHERE unique_id='$unique_id'";
        $stmt = $this->prepare($sql);
        return $stmt->execute();
    } 
	public function delete_all_function($table_name){
        $sql = "DELETE FROM $table_name WHERE 1";
        $stmt = $this->prepare($sql);
        return $stmt->execute();
    }
	public function delete_by_id_function($table_name, $id){
        $sql = "DELETE FROM $table_name WHERE id='$id'";
        $stmt = $this->prepare($sql);
        return $stmt->execute();
    }
//get row
    public function affectedRows($sql, $data = array()){
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
			$stmt->bindValue($key, $value);
		}
        $stmt->execute();
        return $stmt->rowCount();
    }
	
	
	
	
	
/*
*final function
*/
    public function select($sql, $data = array()){
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
			$stmt->bindValue($key, $value);
		}
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 	
    public function rows($sql, $data = array()){
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
			$stmt->bindValue($key, $value);
		}
        $stmt->execute();
        return $stmt->rowCount();
    }
	public function insert($table_name, $insert_data){
		$keys = implode(", ", array_keys($insert_data));
		$values = ":". implode(", :", array_keys($insert_data));
		$sql = "INSERT INTO $table_name($keys) VALUES ($values)";
		$stmt = $this->prepare($sql);
		foreach($insert_data as $key => $value){
			$stmt->bindValue(":".$key, $value, PDO::PARAM_STR);
		}
		return $stmt->execute();
	}
    public function update($table_name, $update_data_array, $update_by){
        $updatekeys = NULL;
        foreach($update_data_array as $key => $value){
            $updatekeys .= "{$key} = :{$key}, "; 
        }
        $updatekeys = rtrim($updatekeys,", ");
        $sql = "UPDATE $table_name SET $updatekeys WHERE $update_by";
        $stmt = $this->prepare($sql);
        foreach($update_data_array as $key => $value) {
            $stmt->bindValue(":{$key}", $value);
        }
        return $stmt->execute();
    }
	public function delete($table_name, $delete_by){
        $sql = "DELETE FROM $table_name WHERE $delete_by";
        $stmt = $this->prepare($sql);
        return $stmt->execute();
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>