<?php
	function getLoginInfo($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function checkCookie(){
		if (isset($_COOKIE["token"]) && isset($_COOKIE["expiry"]) && isset($_COOKIE["username"]) ){
			$username = $_COOKIE['username'];
			$info = getLoginInfo($username);
			$time = time();
			if ( $info['token'] == $_COOKIE['token'] && $time <= $_COOKIE['expiry']){
				$allowed = true;
				return $allowed;
			}
		} else{
			$allowed = false;
			return $allowed;
		}
	}
?>