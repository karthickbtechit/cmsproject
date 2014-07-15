<?php
	include('connect.php');
	$title = $_POST['title'];
	$description = $_POST['description'];
	$file = $_POST['file'];
	$sql = "INSERT INTO member_table (title, description, file) 
			VALUES ('$title','$description','$file')";
	$retain = mysql_query($sql, $con);
	if (! $retain)
	 {
		die ('could not inserted data' .mysql_error());
	 }
		header("location:post_add_page.php");
mysql_close($con);
?>
