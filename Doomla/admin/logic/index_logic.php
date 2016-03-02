<?php 
	include "../common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function toHTML(){
		GLOBAL $menu;
		$tableRows = "";
		for ($i = 0; $i < count($menu); $i++){
			$id = $menu[$i]["id"];
			$page = $menu[$i]["page"];
			$title = $menu[$i]["title"];
			$content = $menu[$i]["content"];
			$menuList = $menu[$i]["menu"];
			$menuorder = $menu[$i]["menuorder"];
			$template = $menu[$i]["template"];
			$tableRows .= "<tr><td>$id</td><td>$page</td><td>$title</td><td>$content</td><td>$menuList</td><td>$menuorder</td><td>$template</td><td><a href='edit.php?id=$id'><button class='edit'>Edit Page</button></a></td><td><a href='remove.php?id=$id'><button class='edit'>Remove</button></a></td></tr>";
		}
		return $tableRows;
	}

	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	$sql = "SELECT * FROM `pagecontent` ORDER BY menuorder ASC";
	$result = $db->query($sql);
	$menu = $result->fetch_all(MYSQLI_ASSOC);
	if( isset($_GET['permission']) == "denied"){
		echo "<script type='text/javascript'>";
		echo "alert('You do not have permission!')";
		echo "</script>";
	}


