<?php
	require_once "../config/config.php";
/*	$mObj = new Menu();
	$mObj->menu = "ggg";
	$mObj->alias = "fff";
	$mObj->category_id = 2;

	if($mObj->save()){
		echo "Saved!!!";
		echo "<br />" . $mObj->id;
	}else{
		echo "not save!!1";
	}
*/
	$art = new Article();
	$articles = $art->home();
	$row = $art->countHome();
