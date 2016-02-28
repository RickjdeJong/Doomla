<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function createInfo($page, $title, $content, $menu, $menuorder, $template){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "INSERT INTO `pagecontent`(`page`, `title`, `content`, `menu`, `menuorder`, `template`) VALUES ('$page','$title','$content','$menu','$menuorder','$template')";
		$result = $db->query($sql);
		$db->close();
	}

	if ( isset($_POST['page']) ){
		$page = $_POST["page"];
		$title = $_POST["title"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		$menuorder = (int)$_POST["menuorder"];
		$template = $_POST["template"];
		createInfo($page, $title, $content, $menu, $menuorder, $template);
		header("Location: index.php");
	}
	elseif (isset($_POST['button']) == "cancel") {
		header("Location: index.php");
	}
	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
	} else{
		header("Location: login.php");
	}

?>