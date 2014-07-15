<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>admin</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		 	<li><a href="admin_home.php">Home</a></li>
           <!-- <li><a href="admin_members_list_backend.php">Members List</a></li>-->
            <li><a href="pagining.php">Members List</a></li>
            <li><a href="#">Member Activity</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">All Adds</a></li>
            <li><a href="">Latest Adds</a></li>
             </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Settings</a></li>
			<li><a href="">Profile </a></li>
			<li><a href="">Change Role </a></li>
			<li><a href="">Visit Site</a></li>
            <li><a href="">View as a Member</a></li>
            <li><a href="admin_logout.php">Logout Admin</a></li>
			</ul>
			<?php 
				  include('javascriptdate.php');
				  include('javascripttime.php');		
				  // include('javascripttimewithseconds.php');				  
			?>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/docs/assets/js/docs.min.js"></script>
</body>
</html>
