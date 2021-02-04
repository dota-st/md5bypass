<?php
	error_reporting(0);
	highlight_file("pass-01.php");

	if(isset($_GET["pass"])){
		if($_GET["pass"] != hash("md4", $_GET["pass"])){
			die('fail~~~');
		}else{
			echo "success!!!<br>";
			echo file_get_contents('flag.txt')."\n";
			echo "<a href='pass-02.php'>下一关</a>";
		}
	}else{
		echo "please input the pass";
	}
?>