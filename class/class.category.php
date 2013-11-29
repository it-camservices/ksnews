<?php
require_once "class.model.php";
class Category extends Model{

	protected $table_name = "tbl_category";
	protected $db_fields = array('id', 'category', 'alias');
		
	public $id;
	public $category;
	public $alias;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	

	function __destruct(){
		$this->db->close();
	}
}

?>