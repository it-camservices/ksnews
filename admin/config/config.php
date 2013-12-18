<?php

	// Set Default timezone
	date_default_timezone_set('Asia/Phnom_Penh');
	
	// Define the core paths
	// Define them as absolute paths to make sure that require_once work as expected
	
	// DIRECTORY_SEPARATOR is a PHP pre-defined constant
	// (\ for Windows, / for Unix)
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	defined('DIR_ROOT') ? null : define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
/*	
	// load core objects
	require_once 'config'.DS.'function.php';
	require_once 'config'.DS.'database.php';
	//require_once DIR_ROOT.DS.'config'.DS.'session.php';
*/
	
	//defined('PREFIX') ? null : define('PREFIX', 'tbl_');	
	//require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.database.php';

	defined('HOST') ? null : define('HOST', '127.0.0.1');
	defined('USER') ? null : define('USER', 'root');
	defined('PASSWORD') ? null : define('PASSWORD', '');
	defined('DB_NAME') ? null : define('DB_NAME', 'ksnews_db');

	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.database.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.model.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.menu.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.category.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.photo.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.article.php';
	require_once DIR_ROOT.DS.'admin'.DS.'class'.DS.'class.controller.php';
?>