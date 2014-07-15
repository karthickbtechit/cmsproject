<?php
session_start();
	if (!isset($_SESSION['adminuser'])){
		header('location:restricted.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Dashboard Members List</title>
</head>
	<?php
		require_once('admin_home_header.php');
	?>
	<?php
		require('admin_home_left_menu.php');
	?>
  <div class="container" style="padding-left:250px; padding-top:100px;" >
	<?php
		include('connect.php');
		$sql ="SELECT * FROM login_register WHERE role ='member' OR role ='admin'";
		$result = mysql_query($sql, $con);
		if(! $result)
		  {
			die ('could not have any members' .mysql_error());
		  }
			echo "<table class= 'table table-bordered'>
		<tr>
			<th colspan='5'> Members List * records are displaying according to members field set </th>
	    </tr>
		<tr>
			<th>S.NO </th>
			<th> Name</th>
			<th>role</th>
			<th>Email</th>
			<th>Phone Numer</th>
	    </tr>";
		while($row= mysql_fetch_array($result))
			{
				echo "<tr> ";
				echo"<td>" .$row['id']. "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['role'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
				echo "</tr>";
			}
				echo "</table>";
				mysql_close($con);
	?>
  </div>
<body>
</body>
</html>
