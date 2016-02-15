<?php 
	include "logic/edit_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Id: <?=$title?> </title>
	<link rel="stylesheet" href="css/adminstyle.css">
	<link rel="stylesheet" href="css/bootstrapStyle.css">
</head>
<body>
	<article>
		<h1>Editing Id : <?=$title?> </h1><br>
			<form id="editform" class="form-horizontal" action="" method="post" accept-charset="utf-8">
				<div class="form-group">
			    	<div class="col-sm-10">
					<input type="hidden" class="form-control" name="id"  value="<?=$id?>">
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
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">menu</label>
			    	<div class="col-sm-10">
					<input type="text" class="form-control" name="menu" value="<?=$menu?>">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">menuorder</label>
			    	<div class="col-sm-10">
					<input type="number" class="form-control" name="menuorder" value="<?=$menuorder?>">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">content</label>
			    	<div class="col-sm-10">
					<textarea class="form-control" name="content" rows="3" ><?=$content?></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="index.php"><button class="btn btn-default">Cancel</button></a>
			</form>
		</div>
	</article>
</body>
</html>