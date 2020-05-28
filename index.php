<!DOCTYPE html>
<html>

	<head>
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
		<link href='http://fonts.googleapis.com/css?family=Hammersmith+One&subset=latin,latin-ext' rel='stylesheet' type='text/css' >
		<link href='http://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
		<meta http-equiv = "refresh" content = "180" charset = "utf-8" />
		<?php require("functions.php"); ?>

		<title>RANASA</title>
	</head>

	<body>
	<div>
	
		<div id = "logo"></div>

		<div id = "banner">
			<?php include('content/content_banners.php'); ?>
		</div>

		<div class = "menu">
			<?php include('content/content_menu.php'); ?>
		</div>

		<div class = "conteudo">
			<?php post(); ?>
		</div>

		<div id = "footer">
			<?php include('content/content_footer.php'); ?>
		</div>

	</div>
	</body>

</html>