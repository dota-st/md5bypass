<?php
	error_reporting(0);
	highlight_file("pass-08.php");

	class auth{
		public $user;
		public $pass;

		public function __destruct(){

			$this->user = (string)$this->user;
			if(strlen($this->user) > 3 || strlen($this->pass) >3){
				echo "level1 is fail~~~";
			}
			if($this->user !== $this->pass && $this->user != $this->pass && md5($this->user) === md5($this->pass)){
				echo "success!<br>";	
				echo file_get_contents("flag.txt");
			}else{
				echo "level2 is fail~~~";
			}
		}
	}
	unserialize($_POST['auth']);
?>