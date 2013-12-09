<?php
require_once "class.model.php";
class Menu extends Model{

	protected $table_name = "tbl_menu";
	protected $db_fields = array('id', 'menu', 'alias', 'category_id', 'indexs', 'p_menu', 'icon_pic', 'icon_size', 'icon_animation', 'icon_border');
		
	public $id;
	public $menu;
	public $alias;
	public $category_id;
	public $indexs;
	public $p_menu;
	public $icon_pic;
	public $icon_size;
	public $icon_animation;
	public $icon_border;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function checkSubmenu($id=0){
		$sql = "SELECT (COUNT(CASE WHEN p_menu={$id} THEN id END)) AS is_submenu FROM tbl_menu";
		$res = $this->db->query($sql);
		$row = $res->fetch_array();
		if($row['is_submenu']>0){
			return true;
		}else{
			return false;
		}
	}

	public function getAllMenu(){
		$res = $this->getAll("WHERE p_menu IS NULL ORDER BY indexs");
		return $res;
	}

	public function getAllSubMenu($menu_id){
		$res = $this->getAll("WHERE p_menu=" . $menu_id . " ORDER BY indexs");
		return $res;
	}

	function __destruct(){
		$this->db->close();
	}
}

?>