<?php
session_start();
if (!isset($_SESSION['adminuser']))
{
header('location:restricted.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>admin panel</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/navbar-fixed-top.css" rel="stylesheet">
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
    <!-- Fixed navbar -->
    <?php
	include('admin_home_header.php');
	?>
    <p></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="container">
   		 <div class="col-lg-4">
		 <?php
			 include('admin_home_left_menu.php');
		 ?>
		 </div>
		 <div class="col-lg-8">
		 <h2 > Admin Area </h2>
		 <p></p>
		 <p> The admin area should control all the details about the members admins and also get some spl features </p>
		 <p></p>
		 </div>
	<!-- Main component for a primary marketing message or call to action -->
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/dist/docs/js/bootstrap.min.js"></script>
</body>
</html>
