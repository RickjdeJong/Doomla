<?php 
	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function createInfo($page, $title, $content, $menu, $menuorder, $template, $onder, $sql){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "INSERT INTO `pagecontent`(`page`, `title`, `content`, `menu`, `menuorder`, `template`, `pagecontent_id`) VALUES ('$page','$title','$content','$menu','$menuorder','$template','$pagecontent_id')";
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
		$pagecontent_id = $_POST["onder"];
		if ($pagecontent_id == 'none'){
			$pagecontent_id = 'NULL';
			$pagecontent_id = mysql_real_escape_string($pagecontent_id);
			$sql = "INSERT INTO `pagecontent`(`page`, `title`, `content`, `menu`, `menuorder`, `template`, `pagecontent_id`) VALUES ('$page','$title','$content','$menu','$menuorder','$template', NULL)";;
		}
		else{
			$sql = "INSERT INTO `pagecontent`(`page`, `title`, `content`, `menu`, `menuorder`, `template`, `pagecontent_id`) VALUES ('$page','$title','$content','$menu','$menuorder','$template','$pagecontent_id')";
		}
		createInfo($page, $title, $content, $menu, $menuorder, $template, $pagecontent_id, $sql);
		header("Location: index.php");
	}

	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
	$sql2 = "SELECT id, menu FROM pagecontent WHERE pagecontent_id IS NULL";
	$menuitem = $db->query($sql2);
	$onder = "<option value='none'>None</option>";
	$menuitem = $menuitem->fetch_all(MYSQLI_ASSOC);
	for ($i=0; $i < count($menuitem); $i++) {
		$onder .= "<option value='".$menuitem[$i]['id']."'>".$menuitem[$i]['menu']."</option>";
	}

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
	} else{
		header("Location: login.php");
	}

?>