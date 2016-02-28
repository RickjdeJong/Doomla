<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";
	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}
	
	function removeToken($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "DELETE token, expiry FROM `users` WHERE username = '$username'";
		$result = $db->query($sql);
		$db->close();
	}
	if (isset($_COOKIE['username'])){
		$username = $_COOKIE['username'];
		setcookie("expiry", "", time()-3600);
		setcookie("token", "", time()-3600);
		setcookie("username", "", time()-3600);	
	}
	header("Location: login.php");
?>