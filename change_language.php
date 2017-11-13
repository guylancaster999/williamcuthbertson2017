<?php
$lan=$_POST["lan"];

switch($lan)
{
	case"en":
	header("LOCATION: index_e.php");
	break;

	case"de":
	header("LOCATION: index.php");
	break;
	
	default:
	header("LOCATION: index_ch.php");
	break;
	}
?>