<?php
require_once "class.model.php";
class Article extends Model{

	protected $table_name = "tbl_article";
	protected $db_fields = array('id', 'title', 'published', 'frontpage', 'address', 'published_by', 'published_date', 'description', 'front_picture');
		
	public $id;
	public $title;
	public $published;
	public $frontpage;
	public $address;
	public $published_by;
	public $published_date;
	public $description;
	public $front_picture;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function getByCategory($category_id=0){
		$sql = "SELECT
	a.*
FROM 
	tbl_article a
INNER JOIN 
	tbl_article_category ac ON a.id = ac.article_id
INNER JOIN
	tbl_category c ON ac.category_id = c.id
WHERE c.id = {$category_id}
GROUP BY
	a.id
";
		$res = $this->getBySql($sql);
		return $res;
	}

	function __destruct(){
		$this->db->close();
	}
}

?>