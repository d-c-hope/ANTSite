<?php
	// Ajax requests come in here
	global $title;
	$title = htmlspecialchars($_GET["title"]);
	require('php/getContent.php');
	getContent($title);
?>