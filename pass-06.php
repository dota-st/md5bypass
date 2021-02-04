<?php
	error_reporting(0);
	highlight_file("pass-06.php");

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = (string)$_GET['user'];
		$pass = (string)$_GET['pass'];

		if($user != $pass && md5($user) == md5(md5($pass))){
			echo "success!<br>";
			echo file_get_contents('flag.txt')."\n";
			echo "<a href='pass-07.php'>下一关</a>";
		}else{
			echo "fail~~~";
		}

	}else{
		echo "please input the user and pass!"."\n";
	}
?>