<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>member home page</title>
	<link href="styles/layout.css" rel="stylesheet" type="text/css" />
	<link href="menu/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--Header Part Starts -->
	<div id="header">
	</div> <!-- id header ends-->
<!--Header Part Ends -->
<!--wapper Part Starts -->
		<div id="wapper">
			<h2>View your adds  </h2>
			<?php 
				include('menu.php');
			?>
			<?php
				include('view_add_backend.php')
			?>
		</div>
<!--wapper Part Ends -->
</body>
</html>
