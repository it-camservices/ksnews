<?php

		require_once "class.submenu.php";
        $submenuObj = new SubMenu();
        $submenus = $submenuObj->getByMenu(3);
       	foreach($submenus as $submenu):
       		//echo $submenu->submenu . "<br />";
       		$encoded = json_encode($submenu->submenu);
       		echo json_decode($encoded) . "<br />";
       	endforeach;
     
?>
	