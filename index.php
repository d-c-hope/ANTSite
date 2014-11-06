<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?php 	
	// Normal page (non ajax) requests enter here
	global $title;
	$title = htmlspecialchars($_GET["title"]);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Introduction</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" media="screen and (max-device-width : 600px)" href="css/mobile.css">
	<script src="jscript/jquery.js"></script>
	<script src="jscript/main.js"></script>
</head>


<body>
		
<div class="page">
	<div class="header">
		<img class="headerTitle" src="images/header.png" alt="antplaceholder" />
		<nav class="mainMenu">
			
			<?php
			require('php/menus.php');
			?>
		</nav>
	</div>	
	
	<nav class="miniMenu">
		
	</nav>
	
	<div id="content" class="content">
		<?php
			require('php/getContent.php');
			getContent($title);
		?>
	</div>
	
	<div class="footer">
		&copy Craft Code House 
		<img src="images/cchLogo.png" alt="Craft code house icon" />
	</div>

</div>

</body>
</html>
