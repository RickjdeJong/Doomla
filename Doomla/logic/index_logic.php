<?php
	include "common/sql.php";
	include "common/module.php";

	if (empty($_GET) OR is_numeric($_GET['page']) OR $_GET['page'] == "" ){
		header("Location: ?page=home");
	}
	elseif(isset($_GET['page'])) {
	    $pageName = $_GET['page'];
	}
	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}


	function getInfo($info){
		GLOBAL $pageName;
		GLOBAL $db;
		$sql = "SELECT * FROM `pagecontent` WHERE '$pageName' = page";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		return $rows;
	}
	
	function getMenu(){
		GLOBAL $db;
		GLOBAL $pageName;
		$sql = "SELECT * FROM `pagecontent` ORDER BY menuorder ASC";
		$result = $db->query($sql);
		$menu = $result->fetch_all(MYSQLI_ASSOC);
		$option = "<ul>";
		foreach ($menu as $item) {
			if ($item['page'] == "contact"){

			}else{
				$id = $item["id"];
				$class = "";
				if($pageName == $item['page']){
						$class = "id='active'";
				}
				if($item["pagecontent_id"] != null){
					continue;
				}
				$option .= "<li><a id='normal'href='?page=".$item["page"]."'".$class.">".$item['menu']."</a>";
				$sql = "select * from pagecontent where pagecontent_id='$id'";
				$result = $db->query($sql);
				$subpages = $result->fetch_all(MYSQLI_ASSOC);
				if ($subpages != null){
					$option .= "<ul class='submenu'>";
					foreach ($subpages as $subpage) {
						$spage = $subpage["page"];
						$class = $spage == $pageName ? "class='active'" : "";
						$menuoption = $subpage["menu"];
						$option .= "<li><a href='?page=$spage' $class>$menuoption</a><br>";
					}

					$option .= "</ul>";
			}

			$option.= "</li>";
			}
			
		}
		$option .= "</ul>";
		return $option;
	}
	$menu = getMenu();
	$rows = getInfo("page");
	if ($rows['template'] == 'normal'){
		$css='<link rel="stylesheet" href="css/style.css">';
	}
	elseif ($rows['template'] == 'night') {
		$css='<link rel="stylesheet" href="css/nightstyle.css">';
	}
	$contact = getModule("contact");
?>
