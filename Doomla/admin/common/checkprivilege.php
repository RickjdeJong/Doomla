<?php
	function getLoginsInfo($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function checkPrivilege(){
		if (isset($_COOKIE["token"]) && isset($_COOKIE["expiry"]) && isset($_COOKIE["username"])){
			$username = $_COOKIE['username'];
			$info = getLoginsInfo($username);
			if ( $info['role'] == "admin" ){
				$allowed = true;
				return $allowed;
			}
		} else{
			$allowed = false;
			return $allowed;
		}
	}
?>