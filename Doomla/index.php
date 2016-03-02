<?php 
	include "logic/index_logic.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$rows['title']?></title>
	<?=$css?>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="images/Doomla.png" id="logo">
		</div>
		<nav>
			<?=$menu?>
		</nav>
	</header>
	<article>
		<div class="content">
			<?=$rows['content']?>
		</div>
	</article>
	<script src="common/main.js"></script>
	<?=$contact?>
</body>
