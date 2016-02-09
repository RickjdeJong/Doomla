<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/bootstrapStyle.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="content">
		<div class="create">
			<a href="create.php">+ create</a>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Page</th>
					<th>Page Title</th>
					<th>Content</th>
					<th>Menu Name</th>
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
