<?php 
	include "logic/createuser_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create a user</title>
	<link rel="stylesheet" href="css/adminstyle.css">
	<link rel="stylesheet" href="css/bootstrapStyle.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<article>
		<h1>Create a user</h1><br>
			<form id="editform" class="form-horizontal" action="" method="post" accept-charset="utf-8">
				<div class="form-group">
			    	<div class="col-sm-10">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">username</label>
			    	<div class="col-sm-10">
						<input type="text" required="required" class="form-control" name="username">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">password</label>
			    	<div class="col-sm-10">
						<input type="password" required="required" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">role</label>
			    	<div class="col-sm-10">
						<select name="role" required="required" class="form-control">
			    			<option value="admin">admin</option>
			    			<option value="moderator">moderator</option>
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-default" onclick="location.href='users.php'" formnovalidate>cancel</button>
			</form>
		</div>
	</article>
	<script src="common/edit.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>