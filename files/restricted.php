<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
	header('location:index.php');
	}
?>
<html>
	<h1>you need the admin rights to view this page !</h1>
	<a href="member_home.php"> Click here! </a>go back to the previous page!
</html>
