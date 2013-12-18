<?php
class Photo extends Model{

	protected $table_name = "tbl_photo";
	protected $db_fields = array('id', 'title', 'photo', 'date_inserted', 'article');
		
	public $id;
	public $title;
	public $photo;
	public $date_inserted;
	public $article;
		
	function __construct(){
		parent::__construct($this->table_name, $this->db_fields);	
	}

	public function getByArticle($id){
		$sql = "SELECT * FROM " . $this->table_name . " WHERE article=" . $id;
		$res = $this->db->query($sql);
		if($res->num_rows>0){
			while($row = $res->fetch_array(MYSQLI_ASSOC)){
				$rows[] = $row;
			}
			return $rows;
		}else
			return 0;
	}
}
?>