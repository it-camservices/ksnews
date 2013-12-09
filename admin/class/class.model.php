<?php
require_once "class.database.php";
class Model{
	
	private $table_name;
	private $db_fields = array();
	public $db;
	
	
	function __construct(){
		$this->db = new Database();
		$this->db->set_charset("utf8");
		$this->db_fields = func_get_args();
		$this->table_name = $this->db_fields[0];
		array_shift($this->db_fields);
	}
		
	public function getAll($string=""){
		return $this->getBySql("SELECT * FROM " . $this->table_name . " " . $string);
	}
	
	public function getById($id = 0){
		$result_array = $this->getBySql("SELECT * FROM " . $this->table_name . " WHERE id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	public function getBySql($sql = ""){
		$res = $this->db->query($sql);
		$object_array = array();
		while($row = $res->fetch_array()){
			$object_array[] = $this->instantiate($row);
		}
		return $object_array;
	}
	
	private function instantiate($record){
		// Could check that $record exists and is an array
		$class_name = get_class($this);
		$object = new $class_name;
		// Simple, long-form approach:
		//$object->id			= $record['id'];
		//$object->name			= $record['menu'];
		//$object->password		= $record['alias'];
			
		// More dynamic, short-form approach:
		foreach($record as $attribute=>$value){
			if($object->has_attribute($attribute)){
				$object->$attribute = $value;
			}
		}
		return $object;
	}
	
	private function has_attribute($attribute){
		// get_object_vars returns an associative array with all attributes
		// (incl. private ones!) as the keys and their current values as the value
		$object_vars = get_object_vars($this);
		// We don't care about the value, we just want to know if the key exists
		// Will return true or false
		return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes() {
		// return an array of attribute names and their values
		$attributes = array();
		foreach($this->db_fields[0] as $field) {
			if(property_exists($this, $field))
				$attributes[$field] = $this->$field;
		}
		return $attributes;
	}
	
	protected function sanitized_attributes() {
		$clean_attributes = array();
		// sanitize the values before submitting
		// Note: does not alter the actual value of each attribute
		foreach($this->attributes() as $key => $value){
			$clean_attributes[$key] = $this->db->real_escape_string($value);
		} 
		return $clean_attributes;
	}

	public function save() {
		// A new record won't have an id yet.
		return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO " . $this->table_name . " (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		//echo $sql; exit();
		//$res = $this->db->query(); 
		if($this->db->query($sql)) {
			$this->id = $this->db->insert_id;
			return true;
		} else {
			return false; 
		}
	}
	
	public function update() {
		// Don't forget your SQL syntax and good habits:
		// - UPDATE table SET key='value', key='value' WHERE condition
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
			$attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE " . $this->table_name . " SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=". $this->db->real_escape_string($this->id);
		//$res = $this->db->query($sql);
		return ($this->db->query($sql)) ? true : false;
	}
	
	public function delete() {
		// Don't forget your SQL syntax and good habits:
		// - DELETE FROM table WHERE condition LIMIT 1
		// - escape all values to prevent SQL injection
		// - use LIMIT 1
		$sql = "DELETE FROM ". $this->table_name;
		$sql .= " WHERE id=". $this->db->real_escape_string($this->id);
		$sql .= " LIMIT 1";
		//$res = $this->db->query($sql);
		return ($this->db->query($sql)) ? true : false;
	
		// NB: After deleting, the instance of User still
		// exists, even though the database entry does not.
		// This can be useful, as in:
		//   echo $user->first_name . " was deleted";
		// but, for example, we can't call $user->update()
		// after calling $user->delete().
	}
	
	public function getCount(){
		$res = $this->db->query("SELECT COUNT(*) AS total_rows FROM " . $this->table_name);
		$rows = $res->fetch_array(MYSQLI_ASSOC);
		return $rows['total_rows'];
	}

	public function closeConnection(){
		$this->db->__destruct();
	}
}