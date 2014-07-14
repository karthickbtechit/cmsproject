<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password ='';
$db_database = 'login';
/*$db_host = 'mysql6.000webhost.com';
$db_user = 'a8963470_admin';
$db_password ='karthick@1';
$db_database = 'a8963470_pligg';
/*
$db_host = 'mysql1.000webhost.com';
$db_user = 'a5762243_cms';
$db_password ='karthick@13';
$db_database = 'a5762243_cms';*/
$con = mysql_connect($db_host, $db_user, $db_password);
	if (! $con)
	{
	  die ('could not connected ' .mysql_error());
	}
	  mysql_select_db($db_database);
		//echo 'connected suceeded';
		//mysql_close($con);
?>
