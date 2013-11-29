<?php
	
class Database extends Mysqli{
		
	private static $HOST = 'localhost';
	private static $USER = 'root';
	private static $PASSWORD = '';
	private static $DB_NAME = 'ksnews_db';

	function __construct(){
		return parent::__construct(self::$HOST, self::$USER, self::$PASSWORD, self::$DB_NAME);
	}

	function __destruct(){
		//$this->close();
	}
	
}

?>