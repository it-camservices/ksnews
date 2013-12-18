<?php

class Article extends Model{

	protected $table_name = "tbl_article";
	protected $db_fields = array('id', 'title', 'published', 'frontpage', 'address', 'author', 
								'published_by', 'published_date', 'modify_date', 'description', 'front_picture', 'category_id');
		
	public $id;
	public $title;
	public $published;
	public $frontpage;
	public $address;
	public $author;
	public $published_by;
	public $published_date;
	public $description;
	public $front_picture;
	public $category_id;
	public $modify_date;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function getByCategory($id){
		$sql = "SELECT * FROM tbl_article WHERE FIND_IN_SET({$id},category_id) AND published=1";
		$res = $this->db->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$rows[] = $row;
			
		}
		if(isset($rows))
			return $rows;

	}

	public function getAllArticle(){
		$sql = "SELECT
	art.*,
	(CASE WHEN published=1 THEN 'yes' ELSE 'No' END) AS publish,
	(CASE WHEN frontpage=1 THEN 'yes' ELSE 'No' END) AS front
FROM
	tbl_article art
ORDER BY
	art.published_date DESC";
		$res = $this->db->query($sql);
		if($res->num_rows>0){
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				$rows[] = $row;
			}
			return $rows;
		}else
			return 0;
	}

	public function getCategoryName($article_id=0){
		$sql = "SELECT category FROM tbl_category WHERE id={$article_id}";
		$res = $this->db->query($sql);
		if($res->num_rows > 0){
			$cate = $res->fetch_array(MYSQLI_ASSOC);
			return $cate['category'];
		}else{
			return "FREE";
		}
	}

	public function home(){
		return $this->getAll("WHERE frontpage=1 AND published=1 ORDER BY published_date DESC LIMIT 6");
	}

	public function countHome(){
		return count($this->home());
	}

	function __destruct(){
		//$this->db->close();
	}
}

?>