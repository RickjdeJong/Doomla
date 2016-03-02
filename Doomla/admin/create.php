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
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
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
						<input type="text" required="required" class="form-control" name="page">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">title</label>
			    	<div class="col-sm-10">
						<input type="text" required="required" class="form-control" name="title">
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">menu</label>
			    	<div class="col-sm-10">
					<input type="text" required="required" class="form-control" name="menu">
					</div>
				</div>
				<div class="form-group">
			    	<label class="col-sm-2 control-label">menuorder</label>
			    	<div class="col-sm-10">
						<input type="number" required="required" class="form-control" name="menuorder" value="">
					</div>
				</div>
				<div class="form-group">
		    		<label class="col-sm-2 control-label">underneath</label>
		    		<div class="col-sm-10">
				    	<select name="onder" required="required" class="form-control">
				    		<?=$onder?>
						</select>
					</div>
				</div>
				<div class="form-group">
			    	<label class="col-sm-2 control-label">template</label>
			    	<div class="col-sm-10">
			    		<select name="template" required="required" class="form-control">
			    			<option value="normal">Normal</option>
			    			<option value="night">Night</option>
						</select>
					</div>
				</div>
				<div class="form-group">
			    	<label for="exampleInputEmail1" class="col-sm-2 control-label">content</label>
			    	<div class="col-sm-10">
						<textarea class="form-control" required="required" name="content" rows="3" ></textarea>
					</div>
					<div id="information">
						<a href="" alt="Use HTML tags to create content">Extra info<br></a>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-default" onclick="location.href='index.php'" formnovalidate>cancel</button>
			</form>
		</div>
	</article>
	<script src="common/edit.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>