<?php 

	include "/common/sql.php";
	$cookie_name = "token";
	$cookie_name2 = "expiry";
	$cookie_name3 = "username";

	function hashPassword($password){
		$salt = "igd84965123asd89456wadsfw1a8shtfh4f5gjs";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$password = sha1($password);
		$password = hash('sha256', $salt.$password);
		return $password;
	}

	function getLoginInfo($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function updateToken($token, $expiry, $username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE users SET token='$token', expiry='$expiry' WHERE username='$username'";
		$result = $db->query($sql);
		$db->close();
	}

	function removeToken($username){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "DELETE token, expiry FROM `users` WHERE username = '$username'";
		$result = $db->query($sql);
		$db->close();
	}

	function checkCookie(){
		$allowed = false;
		if (isset($_COOKIE["token"]) && isset($_COOKIE["expiry"]) && isset($_COOKIE["username"]) ){
			$username = $_COOKIE['username'];
			$loginInfo = getLoginInfo($username);
			$time = time();
			if ( $loginInfo['token'] == $_COOKIE['token'] && $time <= $_COOKIE['expiry'] && $time <=$loginInfo['expiry']){
				$allowed = true;
			}
		}
		if( isset($_COOKIE['expiry']) &&time() > $_COOKIE['expiry'] && time() > $loginInfo['expiry'] ){
			setcookie("expiry", "", time()-3600);
			setcookie("token", "", time()-3600);
			setcookie("username", "", time()-3600);
		}
		return $allowed;
	}

	if( !empty($_POST['username']) && !empty($_POST['password']) ){
		$username = $_POST['username'];
		$password = hashPassword($_POST['password']);
		$loginInfo = getLoginInfo($username, $password);
		if ( $password === $loginInfo['password'] && !isset($_COOKIE["token"]) && !isset($_COOKIE["expiry"]) && !isset($_COOKIE["username"]) ){
			$token = rand(1,9999999);
			$expiry = time() + 600;
			$token = (string)$token;
			$expiry = (string)$expiry;
			setcookie($cookie_name, $token);
			setcookie($cookie_name2, $expiry);
			setcookie($cookie_name3, $username);
			updateToken($token, $expiry, $username);
		}
	}

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
		header("Location: index.php");
	}
?>
