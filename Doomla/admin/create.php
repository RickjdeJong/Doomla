<?php 
	include "logic/create_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create a page</title>
	<link rel="stylesheet" href="css/adminstyle.css">
	<link rel="stylesheet" href="css/bootstrapStyle.css">
</head>
<body>
	<article>
		<h1>Create a page</h1><br>
			<form id="editform" class="form-horizontal" action="" method="post" accept-charset="utf-8">
				<div class="form-group">
			    	<div class="col-sm-10">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">page</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="page">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">title</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="title">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">content</label>
			    	<div class="col-sm-10">
					<textarea class="form-control" name="content" rows="3" ></textarea>
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">menu</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="menu">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php"><button class="btn btn-default">Cancel</button></a>
			</form>
		</div>
	</article>
</body>
</html>