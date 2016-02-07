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

	function updateInfo($page, $title, $content, $menu, $id){
		$db = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		$sql = "UPDATE 'pagecontent' SET 'page'=$page, 'title'=$title, 'content'=$content, 'menu'=$menu WHERE id=$id";
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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Id: <?=$id?> </title>
	<link rel="stylesheet" href="css/adminstyle.css">
	<link rel="stylesheet" href="css/bootstrapStyle.css">
</head>
<body>
	<article>
		<h1>Editing Id : <?=$id?> </h1><br>
			<form id="editform" class="form-horizontal" action="?update=1" method="post" accept-charset="utf-8">
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">ID</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="id"  value="<?=$id?>">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">page</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="page" value="<?=$page?>">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">title</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="title" value="<?=$title?>">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">content</label>
			    	<div class="col-sm-10">
					<textarea class="form-control" name="content" rows="3" ><?=$content?></textarea>
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">menu</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="menu" value="<?=$menu?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php"><button class="btn btn-default">Cancel</button></a>
			</form>
		</div>
	</article>
</body>
</html>