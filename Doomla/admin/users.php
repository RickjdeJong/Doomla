<?php 
	include "logic/users_logic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/bootstrapStyle.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="content">
		<div class="create">
			<i class="fa fa-home"></i><a href="index.php">Index</a>
			<i class="fa fa-plus"></i><a href="createuser.php">Create User</a>
			<i class="fa fa-sign-out"></i><a href="logout.php">Log out</a>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Role</th>
					<th>Edit</th>
					<th>Remove</th>
				</tr>
			</thead>
			<tbody>
				<?=toHTML()?>
			</tbody>
		</table>
	</div>
</body>
</html>