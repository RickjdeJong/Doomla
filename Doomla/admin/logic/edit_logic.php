<?php 

	include "/common/sql.php";
	include "/common/checkcookie.php";

	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == false){
		header("Location: login.php");
	}

	function getInfo($id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT * FROM pagecontent WHERE id = '$id'";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		return $results;
	}

	function updateInfo($page, $title, $content, $menu, $menuorder, $template, $id, $onder){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE pagecontent SET page='$page', title='$title', content='$content', menu='$menu', menuorder='$menuorder', template='$template', pagecontent_id='$onder' WHERE id='$id'";
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
		$template = $_POST["template"];
		$onder = $_POST["onder"];
		updateInfo($page, $title, $content, $menu, $menuorder, $template, $id, $onder);
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
		$template = $results["template"];
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql2 = "SELECT id FROM pagecontent WHERE pagecontent_id IS NULL";
		$menuitem = $db->query($sql2);
		$onder = "";
		$menuitem = $menuitem->fetch_all(MYSQLI_ASSOC);
		for ($i=0; $i < count($menuitem); $i++) {
			$onder .= "<option value='".$menuitem[$i]['id']."'>".$menuitem[$i]['id']."</option>";
		}
	}
	$allowed = false;
	$allowed = checkCookie();
	if ($allowed == true){
		if($template == "night"){
			$selected = '<option value="normal">Normal</option>
							<option selected="selected" value="night">Night</option>';
		}
		elseif ($template == "normal") {
			$selected = '<option selected="selected" value="normal">Normal</option>
							<option value="night">Night</option>';
		}
	} else{
		header("Location: login.php");
	}
?>
