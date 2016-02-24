<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function createInfo($page, $title, $content, $menu){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "INSERT INTO `pagecontent`(`page`, `title`, `content`, `menu`) VALUES ('$page','$title','$content','$menu')";
		$result = $db->query($sql);
		$db->close();
	}

	if ( isset($_POST['page']) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['menu']) ){
		$page = $_POST["page"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		createInfo($page, $title, $content, $menu);
		header("Location: index.php");
	}
	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
	} else{
		header("Location: login.php");
	}

?>