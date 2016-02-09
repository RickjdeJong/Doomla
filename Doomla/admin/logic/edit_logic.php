<?php 
	// [ RETRIEVING CONFIG ] //
	include "../common/sql.php";
	// [ FUNCTIONS ] //
	function getInfo($id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM pagecontent WHERE id = '$id'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}
	function updateInfo($page, $title, $content, $menu, $id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE pagecontent SET page='$page', title='$title', content='$content', menu='$menu' WHERE id='$id'";
		$result = $db->query($sql);
		$db->close();
	}


	if ( isset($_POST['page']) ) {
		$page = $_POST["page"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		$id = $_POST["id"];
		var_dump($id);
		updateInfo($page, $title, $content, $menu, $id);
		header("Location: index.php");
	}
		// [ IF STATEMENTS ] //
	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$results = getInfo($id);
		$id = $results["id"];
		$page = $results["page"];
		$title = $results["title"];
		$content = $results["content"];
		$menu = $results["menu"];
	}
?>
