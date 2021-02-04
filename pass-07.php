<?php
	error_reporting(0);
	highlight_file("pass-07.php");

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = $_GET['user'];
		$pass = $_GET['pass'];

		if($user !== $pass && md5($user) === md5(md5($pass))){
			echo "success!<br>";
			echo file_get_contents('flag.txt')."\n";
			echo "<a href='pass-08.php'>下一关</a>";
		}else{
			echo "fail~~~";
		}

	}else{
		echo "please input the user and pass!"."\n";
	}
?>