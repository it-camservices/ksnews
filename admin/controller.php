<?php
require_once "include";
$action = @$_GET['action'];

if($action == "new"){

	if(isset($_POST['saveArticle'])){
		$articleObject = new Article();
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
			header("Location: http://ksnews/admin/?page=3");
		}
	}

}elseif($action == "edit"){
	if(isset($_POST['editArticle']) || isset($_REQUEST['article'])){
		$article_id = $_REQUEST['article'];
		$article_id = is_array($article_id)?$article_id[0]:$article_id;
		$article = $artObj->getById($article_id);
		header("Location: /admin?action=edit&page=3");
	}
}
?>