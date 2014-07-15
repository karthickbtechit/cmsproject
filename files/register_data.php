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
<body onLoad="setTimeout('delayer()', 5000)">
	<script type="text/javascript">
		function delayer()
		{
    	window.location = "index.php"
		}
	</script>
	<h2>Your Registered With Us Sucessfully</h2>
	<p>This page will redirect to login screen in 5 seconds </p>
	<p>Not Get redirected Please <a href="index.php"> Click here to Login</a>!</p>
</body>
</html>
<?php
include('connect.php');
$name 	  = $_POST['name'];
$password = $_POST['password'];
$email 	  = $_POST['email'];
$phone    = $_POST['phone'];
$role     = $_POST['member'];
	  $sql= "INSERT INTO login_register (name, password, email, phone, role) 
			 VALUES ('$name', '$password', '$email', $phone, '$role')";
  $retain = mysql_query($sql, $con);
		if (! $retain){
		die ('could not inserted data' .mysql_error());
		}
		//echo 'Your Registerd Succesfully <a href="index.php">login here! </a>';
mysql_close($con);
?>
