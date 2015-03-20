<?php
require_once(LIB_PATH.DS.'database.php');
class Status {

	protected static  $tbl_name = "status";
	/*-Comon SQL Queries-*/
	function db_fields(){
		global $mydb;
		return $mydb->getFieldsOnOneTable(self::$tbl_name);
	}
	
	function allUsers(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM status");
		$cur = $mydb->loadResultList();
		return $cur;
	}
	function userFilter($SSN=0,$Site=''){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where SSN= {$SSN} OR Site= {$Site}");
			$cur = $mydb->loadResultList();
			return $cur;
	}		
	function singleUser($SSN){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name." WHERE SSN={$SSN} LIMIT 1");
		$row = $mydb->loadSingleResult();
		return $row;
	}
	
	
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->db_fields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function update(){
        global $mydb;
        $attributes = $this->sanitized_attributes();
        $attributes_pairs = array();
        foreach($attributes as $key => $value){
            $attributes_pairs[] = "{$key}='{$value}'";
        }
        $sql = "UPDATE ".self::$table_name." SET ";
        $sql .= join(", ", $attributes_pairs);
        $sql .= " WHERE service_no=".self::$service_no;
        $database->query($sql);
        return ($database->affected_rows() == 1)? true : false;
    }
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tbl_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	
}
?>