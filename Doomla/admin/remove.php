<?php 
	// [ RETRIEVING CONFIG ] //
	include "../common/sql.php";
	// [ FUNCTIONS ] //
	function removeInfo($id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "DELETE FROM `pagecontent` WHERE id = $id";
		$result = $db->query($sql);
		$db->close();
	}

	if( isset($_GET['id']) ){
		$id = $_GET['id'];
		removeInfo($id);
		header("Location: index.php");
	}
?>