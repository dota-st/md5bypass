<?php
	error_reporting(0);
	highlight_file("pass-03.php");

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = $_GET['user'];
		$pass = $_GET['pass'];

		if(!ctype_alpha($user) && !is_numeric($pass) && md5($user) == md5($pass)){
			echo "success!<br>";
			echo file_get_contents('flag.txt')."\n";
			echo "<a href='pass-04.php'>下一关</a>";
		}else{
			echo "fail~~~";
		}

	}else{
		echo "please input the user and pass!"."\n";
	}
?>