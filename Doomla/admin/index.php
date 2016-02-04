<?php 
	include "../common/sql.php";

	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	$sql = "SELECT * FROM `pagecontent`";
	$result = $db->query($sql);
	$menu = $result->fetch_all(MYSQLI_ASSOC);

	function toHTML(){
		GLOBAL $menu;
		$tableRows = "";
		for ($i = 0; $i < count($menu); $i++){
			$id = $menu[$i]["id"];
			$page = $menu[$i]["page"];
			$title = $menu[$i]["title"];
			$content = $menu[$i]["content"];
			$menuList = $menu[$i]["menu"];
			$tableRows .= "<tr><td>$id</td><td>$page</td><td>$title</td><td>$content</td><td>$menuList</td><td><button class='edit'><a href='edit.php?id=$id'>Edit</a></button></td><td><button class='edit'><a href='remove.php?id=$id'>Remove</a></button></td></tr>";
		}
		return $tableRows;
	}
	include "common/content.php";

