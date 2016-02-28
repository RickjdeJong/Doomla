<?php 
	// [ RETRIEVING CONFIG ] //
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}
	// [ FUNCTIONS ] //
	function removeUser($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "DELETE FROM `users` WHERE username = '$username'";
		$result = $db->query($sql);
		$db->close();
	}

	if( isset($_GET['username']) ){
		$username = $_GET['username'];
		removeUser($username);
		if (isset($_COOKIE['username']) == $username){
			setcookie("expiry", "", time()-3600);
			setcookie("token", "", time()-3600);
			setcookie("username", "", time()-3600);	
		}
		header("Location: users.php");
	}

?>