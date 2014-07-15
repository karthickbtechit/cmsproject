<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>admin</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="bootstrap/dist/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/dist/css/dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
require_once('admin_home_header.php');
?>

<!-- <div class="container" style="padding-left:250px; padding-top:100px;" > -->
<div class="container-fluid">
		 <div class="col-lg-4">
		 <?php
			require('admin_home_left_menu.php');
		 ?>
		 </div>
		   <div class="col-lg-8">
<?php
/* 
	VIEW-PAGINATED.PHP
	Displays all data from 'players' table
	This is a modified version of view.php that includes pagination
*/
// connect to the database
	include('connect.php');
	// number of results to show per page
	$per_page = 10;
	// figure out the total pages in the database
	$result = mysql_query("SELECT * FROM login_register");
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);
	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	// display pagination
	echo "<table border='1' cellpadding='10' class=pagination'>";	
	echo "<p><a href='#' > View All</a> | <b>View Page:</b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "<a href='pagining.php?page=$i'>$i</a> ";
	}
	echo "</p>";
	echo "</table>";
	// display data in table
	echo "<table border='1' cellpadding='10' class= 'table table-bordered '>";
	echo "<tr> <th colspan='5'> Members List * records are displaying according to members field set </th></tr>";
	echo "<tr> <th>ID</th> <th>Name</th> <th>Email</th> <th>Role</th> <th>Phone Number</th></tr>";
	// loop through results of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; }
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . mysql_result($result, $i, 'id') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'name') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'email') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'role') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'phone') . '</td>';
		echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';
		echo "</tr>"; 
	}
	// close table>
	echo "</table>"; 
	echo "<table border='1' cellpadding='10'>";	
	echo "<p><a href='#'> View All</a> | <b>View Page:</b> ";
	for ($i = 1; $i <= $total_pages; $i++)
	{
	 echo "<a href='pagining.php?page=$i'> $i</a> ";
	}
	echo "</p>";
	echo "</table>";
	mysql_close($con);
	// pagination
?>
	</div>
</div>		
<div class="col-lg-12"> 
<p><a  href="#">Add a new record</a></p> 
</div>
<!-- </div> -->
</body>
</html>
