<?php

class Home{

	function __construct(){
		
	}

	public function getMenu(){
		$menuObject = new Menu();
		return $menuObject->getAllMenu();
	}

	function __destruct(){
		$this->db->close();
	}

}

?>