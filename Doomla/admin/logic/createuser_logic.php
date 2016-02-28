<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function createUser($username, $password, $role){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('$username','$password','$role')";
		$result = $db->query($sql);
		$db->close();
	}

	function hashPassword($password){
		$salt = "igd84965123asd89456wadsfw1a8shtfh4f5gjs";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$password = sha1($password);
		$password = hash('sha256', $salt.$password);
		return $password;
	}

	if ( isset($_POST['username']) ){
		$username = $_POST["username"];
		$password = hashPassword($_POST['password']);
		$role = $_POST["role"];
		createUser($username, $password, $role);
		header("Location: users.php");
	}
	elseif (isset($_POST['button']) == "cancel") {
		header("Location: users.php");
	}
	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
	} else{
		header("Location: login.php");
	}

?>