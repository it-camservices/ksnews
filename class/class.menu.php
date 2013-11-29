<?php
require_once "class.model.php";
class Menu extends Model{

	protected $table_name = "tbl_menu";
	protected $db_fields = array('id', 'menu', 'alias', 'category_id', 'index');
		
	public $id;
	public $menu;
	public $alias;
	public $category_id;
	public $index;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function checkSubmenu($id=0){
		$sql = "SELECT (CASE WHEN id IN (SELECT p_menu FROM tbl_submenu) THEN 1 ELSE 0 END) AS is_submenu FROM tbl_menu WHERE id = {$id}";
		$res = $this->db->query($sql);
		$row = $res->fetch_array();
		if($row['is_submenu']){
			return true;
		}else{
			return false;
		}
	}

	function __destruct(){
		$this->db->close();
	}
}

?>