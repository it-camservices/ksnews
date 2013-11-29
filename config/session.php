<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out
// Keep in mind when working with sessions that it is generally inadvisable to store DB-related objects in sessions

	class Session{
		
		private $logged_in = false;
		public $user_id;
		public $login_id=0;
		
		function __construct(){
			session_start();
			$this->check_login();
		}
		
		public function is_logged_in(){
			return $this->logged_in;	
		}
		
		public function login($user){
			// database should find user based on username/password
			if($user){
				$this->user_id = $_SESSION['user_id'] = $user->user_id;
				$this->logged_in = true;	
			}	
		}
		
		public function logout(){
			unset($_SESSION['user_id']);
			unset($this->user_id);
			unset($_SESSION['user_group']);
			unset($_SESSION['login_id']);
			unset($_SESSION['user_name']);
			$this->logged_in = false;	
		}
		
		private function check_login(){
			if(isset($_SESSION['user_id'])){
				$this->user_id = $_SESSION['user_id'];
				$this->logged_in = true;
			}else{
				unset($this->user_id);
				$this->logged_in = false;	
			}
		}
			
	}
	$session = new Session();
?>