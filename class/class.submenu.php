<?php
require_once "class.model.php";
class SubMenu extends Model{

	protected $table_name = "tbl_submenu";
	protected $db_fields = array('id', 'submenu', 'alias', 'p_menu', 'category_id', 'index');
		
	public $id;
	public $submenu;
	public $alias;
	public $p_menu;
	public $category_id;
	public $index;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function getByMenu($id){
		$sql = "SELECT * FROM " . $this->table_name;
		$sql .= " WHERE p_menu=" . $id;
		$res = $this->getBySql($sql);
		return $res;
	}

	function __destruct(){
		$this->db->close();
	}
}

?>