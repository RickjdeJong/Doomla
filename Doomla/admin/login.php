<?php
	include "logic/login_logic.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/loginstyle.css">
	<link rel="stylesheet" href="css/bootstrapStyle.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<article>
		<h1>Login</h1>
		<form action="" method="post" accept-charset="utf-8">
			<div class="form-group">
			    <div class="col-sm-14">
					<input type="text" class="form-control" name="username" required="required" placeholder="Username" value="">
				</div>
			    <div class="col-sm-14">
					<input type="password" class="form-control" name="password" required="required" placeholder="Password" value="">
				</div>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
		</form>
	</article>	
	<script src="common/login.js"></script>
</body>
</html>