<?php
	include('connect.php');
	$sql = "select * from member_table ORDER BY id DESC limit 0, 8 ";
	$retain = mysql_query($sql, $con);
	if (!$retain)
	 {
		die ('no add posted yet' .mysql_error());
	 }
	while($row = mysql_fetch_array($retain))
	 {
		echo "id: {$row['id']}<br>".
		 "Title:{$row['title']}<br>".
		 "Description:{$row['description']}<br>".
		 "Image:{$row['file']}<br><br><br>";
	 }
		echo "you can view only last few adds";
mysql_close($con);
?>
