<?php 

	function getModule($page){
		$contact = "<div class='module'>";
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "SELECT content FROM pagecontent WHERE page = '$page' ";
		$result = $db->query($sql);
		$results = $result->fetch_assoc();
		$contact .= $results['content'];
		$contact .= "</div";
		return $contact;
	}
?>