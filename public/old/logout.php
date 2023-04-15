<?php
	session_start();
	echo "<link href='style.css' type='text/css' rel='stylesheet' />";
	function redirect($url, $permanent=false){
		if(headers_sent()=== false){
			header('Location: '.$url, true, ($permanent===true)?301:302);
		}
		exit();
	}
	if(isset($_SESSION["me"])){
		session_unset();
		session_destroy();
		redirect('index.php', false);
	}elseif(isset($_SESSION["admin"])){
		session_unset();
		session_destroy();
		redirect('index.php', false);
	}
	else{
		include("top.php");
		echo "<div class='error'>Not Logged In!!!</div>";
	}
	include("bottom.php");
?>