<?php
require_once "class.model.php";
class Category extends Model{

	protected $table_name = "tbl_category";
	protected $db_fields = array('id', 'category', 'alias', 'description', 'last_modify');
		
	public $id;
	public $category;
	public $alias;
	public $description;
	public $last_modify;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	

	function __destruct(){
		$this->db->close();
	}
}

?>