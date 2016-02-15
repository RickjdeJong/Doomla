<?php
	include "common/sql.php";
	   	 	// checking if page index exists
	if (empty($_GET) OR is_numeric($_GET['page']) OR $_GET['page'] == "" ){
			// Setting the PageName variable to home
			// Redirecting to page given
		header("Location: ?page=home");
	}
	elseif(isset($_GET['page'])) {
			// Setting the PageName variable
	    $pageName = $_GET['page'];
	}
		// Create connection
	$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

		// Check connection
	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	function getInfo($info){
		// Defining the Globals variables to Local variables
		GLOBAL $pageName;
		GLOBAL $db;
		$sql = "SELECT * FROM `pagecontent` WHERE '$pageName' = page";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		return $rows;
	}
	
	function getMenu(){
		// Defining the Globals variables to Local variables
		GLOBAL $db;
		GLOBAL $pageName;
		$sql = "SELECT menu, page, menuorder, template FROM `pagecontent` ORDER BY menuorder ASC";
		$result = $db->query($sql);
		$menu = $result->fetch_all(MYSQLI_ASSOC);
		$option = "<ul>";
		foreach ($menu as $item) {
			$class = "";
			if($pageName == $item['page'])
				{
					$class = "id='active'";
				}
			$option .= "<li><a href='?page=" . $item["page"] . "'". $class . ">" . $item['menu'] . "</a></li>";
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
	include "common/content.php";
	// include "common/footer.php";
?>
