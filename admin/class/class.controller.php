<?php

class Controller{

	private $page;
	private $action;
	private $id;

	public function controlAction($page, $action, $id=NULL){
		$this->page = intval($page);
		$this->action = intval($action);
		$this->id = intval($id);
		switch ($this->page) {
			case 1: // Category
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 2: // Menu
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 3: // Aritcle
				switch ($this->action) {
					case 'edit':
						if(isset($_POST['deleteAritcle']))
							$this->deleteAritcle();
						elseif(isset($_POST['publishArticle']))
							$this->publishArticle();
						elseif(isset($_POST['unpublishArticle']))
							$this->unpublishArticle();
						elseif(isset($_POST['editArticle'])){
							if(isset($_POST['articleId'])){
								$id = $_POST['articleId'];
								$this->id = $id[0];
								return $this->loadEditArticle();
							}
						}
						else{
							return $this->loadEditArticle();
						}
						header("Location: /admin/index.php?page=3&action=new");
						break;
					case 'save':
						$this->saveArticle();
						break;

					default:
						# code...
						break;
				}
				break;
			case 4: // Right Module
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 5: // Button Module
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 6: // Other New Button
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 7: // Hot News Alert
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 8: // Limit Control
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 9: // Music Gallary
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			case 10: // Video Gallary
				switch ($this->action) {
					case 'edit':
						# code...
						break;
					case 'new':
						# code...
						break;

					default:
						# code...
						break;
				}
				break;
			default:
				break;
		}
	}

	protected function unpublishArticle(){
		if(isset($_POST['articleId'])){
			$articleId = $_POST['articleId'];
			$articleObject = new Article();
			foreach($articleId as $id):
				$article = $articleObject->getById($id);
				$article->published = 0;
				$article->save();
			endforeach;
			return true;
		}else{
			return false;
		}
	}

	protected function publishArticle(){
		if(isset($_POST['articleId'])){
			$articleId = $_POST['articleId'];
			$articleObject = new Article();
			foreach($articleId as $id):
				$article = $articleObject->getById($id);
				$article->published = 1;
				$article->save();
			endforeach;
			return true;
		}else{
			return false;
		}
	}

	protected function deleteAritcle(){
		if(isset($_POST['articleId'])){
			$articleId = $_POST['articleId'];
			$articleObject = new Article();
			foreach($articleId as $id):
				$article = $articleObject->getById($id);
				$article->delete();
			endforeach;
			return true;
		}else{
			return false;
		}
	}

	protected function loadEditArticle(){
		$articleObject = new Article();
		$article = $articleObject->getById($this->id);
		return $article;
	}

	protected function pictureGallery(){
		$images = func_get_args();
		$directory = array_shift($images);
		$data = array();
		for($i=0; $i<count($images); $i++){
			if(!is_dir("../images/gallery/".$directory)){
				mkdir("../images/gallery/".$directory);
			}
			if(!empty($images[$i]['tmp_name'])){
				$tmp = $images[$i]['tmp_name'];
				$image = $images[$i]['name'];
				if(file_exists("../images/gallery/".$directory."/".$image)){
					unlink("../images/gallery/".$directory."/".$image);
				}
				move_uploaded_file($tmp, "../images/gallery/".$directory."/".$image);
				$data[] = $image;
			}
		}
		return $data;
	}

	protected function saveArticle(){
		
		$articleObject = new Article();

		if(isset($_POST['id']) && intval($_POST['id'])>0){ 
			$id = mysql_real_escape_string(intval($_POST['id']));
			$article = $articleObject->getById($this->id);
			$article->id = $id;
			$article->title = $_POST['title'];
			$article->address = $_POST['address'];
			$article->author = $_POST['author'];
			$article->published_date = date("Y-m-d",strtotime($_POST['publishDate']));	
			$article->description = $_POST['description'];
			$article->modify_date = $_POST['publishDate'];
			$article->published_by = 1;
			$article->frontpage = $_POST['frontpage'];
			$article->published = $_POST['publish'];
			$category_id = implode(',', $_POST['category']);
			$article->category_id = $category_id;

			if(!empty($_FILES['frontImage']['tmp_name'])){
				$tmp = $_FILES['frontImage']['tmp_name'];
				$frontImage = $articleObject->db->real_escape_string($_FILES['frontImage']['name']);
				move_uploaded_file($tmp, "../images/front/".$frontImage);
				$image = file_get_contents("../images/front/".$frontImage);
				$article->front_picture = $image;
				if(file_exists("../images/front/".$frontImage)){
					unlink("../images/front/".$frontImage);
				}
			}
			if($article->save()){
				header("Location: /admin/index.php?page=3&action=new");
			}
		}else{ 

			$articleObject->title = $_POST['title'];
			$articleObject->address = $_POST['address'];
			$articleObject->author = $_POST['author'];
			$articleObject->published_date = date("Y-m-d",strtotime($_POST['publishDate']));		
			$articleObject->modify_date = $_POST['publishDate'];
			$articleObject->description = $_POST['description'];
			$articleObject->published_by = 1;
			$articleObject->frontpage = $_POST['frontpage'];
			$articleObject->published = $_POST['publish'];
			$category_id = implode(',', $_POST['category']);
			$articleObject->category_id = $category_id;
			$tmp = $_FILES['frontImage']['tmp_name'];
			$frontImage = $articleObject->db->real_escape_string($_FILES['frontImage']['name']);
			move_uploaded_file($tmp, "../images/front/".$frontImage);
			$image = file_get_contents("../images/front/".$frontImage);
			$articleObject->front_picture = $image;
			if(file_exists("../images/front/".$frontImage)){
				unlink("../images/front/".$frontImage);
			}
			if($articleObject->save()){
				$article_id = $articleObject->id;
				$photos = $this->pictureGallery($article_id, $_FILES['f-img1'], $_FILES['f-img2'], $_FILES['f-img3'], $_FILES['f-img4'], $_FILES['f-img5'], $_FILES['f-img6'], $_FILES['f-img7'], $_FILES['f-img8'],$_FILES['f-img9'], $_FILES['f-img10']); 
				$articleObject->closeConnection();
				if(count($photos)>0){
					for($i=0; $i<count($photos); $i++){
						$photo = new Photo();
						$photo->title = $_POST['title'];
						$photo->photo = $photos[$i];
						$photo->date_inserted = date('Y-m-d');
						$photo->article = $article_id;
						$photo->save();
						$photo->closeConnection();
					}
				}
				header("Location: /admin/index.php?page=3&action=new");
			}
		}
	}

	public function getContentImage($image){
		$tmp = $_FILES[$image]['tmp_name'];
		$frontImage = $articleObject->db->real_escape_string($_FILES[$image]['name']);
		move_uploaded_file($tmp, "../images/front/".$frontImage);
		$image = file_get_contents("../images/front/".$frontImage);
		$articleObject->front_picture = $image;
		if(file_exists("../images/front/".$frontImage)){
			unlink("../images/front/".$frontImage);
		}
	}

}

isset($_GET['page']) ? $page = $_GET['page'] : $page = null;
isset($_GET['action']) ? $action = $_GET['action'] : $action = null;
isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = null;

$controller = new Controller();
$data = $controller->controlAction($page, $action, $id);

?>