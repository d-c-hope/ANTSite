<?php
function getContent($title) {
	switch ($title) {
		case "introduction":
			require('html/introduction.php');
		    break;
		case "benefits":
    		require('html/benefits.php');
		    break;
		case "eyfs":
			require('html/eyfs.php');
		    break;
		case "technology":
			require('html/technology.php');
		    break;
		case "furtherinfo":
			require('html/furtherinfo.php');
		    break;
	}
}
?>