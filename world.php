<!DOCTYPE html>
<html>
<head>
	<title>Hello World App</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<meta name="author" content="Team Bah" />
	<meta name="description" content="The description of website" />

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" />

	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
	<?php
		for($ctr=1;$ctr<=6;$ctr++){
			echo "<h$ctr> Hello Shei! How's ur day?</h$ctr>";
		}
	?>
</div>
</body>
</html>