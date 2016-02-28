<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";
	include "/common/checkprivilege.php";

	$allowed = false;
	$allowed = checkCookie();
	$allowed = checkPrivilege();
	if ($allowed == false){
		header("Location: index.php?permission=denied");
	}

	function toHTML(){
		GLOBAL $menu;
		$tableRows = "";
		for ($i = 0; $i < count($menu); $i++){
			$id = $menu[$i]["id"];
			$username = $menu[$i]["username"];
			$role = $menu[$i]["role"];
			$tableRows .= "<tr><td>$id</td><td>$username</td><td>$role</td><td><a href='edituser.php?id=$id'><button class='edit'>Edit User</button></a></td><td><a href='removeuser.php?username=$username'><button class='remove'>Remove</button></a></td></tr>";
		}
		return $tableRows;
	}

	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	$sql = "SELECT `id`, `username`, `role`FROM `users` ORDER BY id ASC";
	$result = $db->query($sql);
	$menu = $result->fetch_all(MYSQLI_ASSOC);
?>