<?php

class Controller{

	private $page;
	private $action;
	private $id;

	public function controlAction($page, $action, $id=NULL){
		$this->page = mysql_real_escape_string($page);
		$this->action = mysql_real_escape_string($action);
		$this->id = mysql_real_escape_string($id);
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
						header("Location: /admin?page=3&action=new");
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
				header("Location: /admin/?page=3&action=new");
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
				header("Location: /admin/?page=3&action=new");
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

if(isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = null;
if(isset($_GET['action']))
	$action = $_GET['action'];
else
	$action = null;
if(isset($_REQUEST['id']))
	$id = $_REQUEST['id'];
else
	$id = null;
$controller = new Controller();
$data = $controller->controlAction($page, $action, $id);

?>