<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function getRole($id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT username, role FROM users WHERE id = $id";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function updateRole($role, $id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE users SET role='$role' WHERE id = $id";
		$result = $db->query($sql);
		$db->close();
	}


	if ( isset($_POST['role']) ) {
		$role = $_POST['role'];
		$id = $_POST['id'];
		updateRole($role, $id);
		header("Location: users.php");
	}

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$results = getRole($id);
		$role = $results["role"];
		$username = $results["username"];
		if($role == "admin"){
			$selected = '<option value="moderator">Moderator</option>
							<option selected="selected" value="admin">Admin</option>';
		}
		elseif ($role == "moderator") {
			$selected = '<option selected="selected" value="moderator">Moderator</option>
							<option value="admin">Admin</option>';
		}
	}
?>
