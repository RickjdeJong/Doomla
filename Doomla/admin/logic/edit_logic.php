<?php 

	include "../common/sql.php";

	function getInfo($id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM pagecontent WHERE id = '$id'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function updateInfo($page, $title, $content, $menu, $menuorder, $id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE pagecontent SET page='$page', title='$title', content='$content', menu='$menu', menuorder='$menuorder' WHERE id='$id'";
		$result = $db->query($sql);
		$db->close();
	}


	if ( isset($_POST['page']) ) {
		$page = $_POST["page"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		$menuorder = (int)$_POST["menuorder"];
		$id = $_POST["id"];
		var_dump($menuorder);
		updateInfo($page, $title, $content, $menu, $menuorder, $id);
		header("Location: index.php");
	}

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$results = getInfo($id);
		$id = $results["id"];
		$page = $results["page"];
		$title = $results["title"];
		$content = $results["content"];
		$menu = $results["menu"];
		$menuorder = $results["menuorder"];
	}
?>
