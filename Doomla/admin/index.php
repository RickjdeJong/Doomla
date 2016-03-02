<?php
	include"logic/index_logic.php" 
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
			<i class="fa fa-user"></i><a href="users.php">Users</a>
			<i class="fa fa-plus"></i><a href="create.php">Create Page</a>
			<i class="fa fa-sign-out"></i><a href="logout.php">Log out</a>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Page</th>
					<th>Page Title</th>
					<th>Content</th>
					<th>Menu Name</th>
					<th>Menu Order</th>
					<th>Template</th>
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
