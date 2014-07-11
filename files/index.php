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
	<style>
	body{
	background-color:#FCFCFC;
	}
	.border{
	border:#999999;
	border-style:solid;
	border-width:thin;
	}
	</style>
<?php
	include('connect.php');
?>
<div class="container">
	<div class="row-fluid">
		<div class="span8">
<table class="border col-md-3" >
	<form id="form1" class="form-signin" name="form1" method="post" action="login.php" onSubmit="return validate()">
  	<tr>
  	<td width="9">&nbsp;</td>
   	<td colspan="3"> <h1>sign in </h1></td>
    <td width="6">&nbsp;</td>
 	</tr>
  	<tr>
    <td height="35">&nbsp;</td>
    <td colspan="3">
	<input type="text" name="name" id="name" class="form-control" placeholder="Enter your username" required autofocus/>			</td>
	<td>&nbsp;</td>
	</tr>
	<tr>
    <td>&nbsp;</td>
    <td colspan="3"><input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required autofocus/></td>
   	<td><p>&nbsp;</p>
    <p>&nbsp;</p></td>
  	</tr>
	<tr>
	<td>&nbsp;</td>
	<td colspan="3">
	<!--	<input type="radio" checked="checked" name="title" value="member" id="member" /> member</label>
	<label for="admin"> <input type="radio" name="title" value="admin" id="admin" /> admin</label> -->

	<select name="member" id="member" value="member" class="form-control">
	<option title="title" value="">select your member type </option>
    <option title="title" value="member"> member </option>
    <option title="title" value="admin"> admin</option>
    </select><br/></td>
    <td>&nbsp;</td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td width="128"> <input type="submit" name="Submit"  class="btn btn-block btn-primary" value="Login" id="add" /></td>
	  <td width="1">&nbsp;</td>
	  <td width="128"><input type="reset" name="reset" value="Reset" class="btn btn-block" /></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td height="46">&nbsp;</td>
	  <td colspan="3"><a href="register.php" class="btn btn-block btn-info">Register?</a></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td colspan="3"><a href="forget_password.php" class="btn btn-block btn-info">Forgot Password?</a></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	<td colspan="5">
		  <?php
			if (isset($_GET['error']))
			{
			$error=$_GET['error'];
			if ($error==1)
			{
			echo "<br><br><br>";
			echo "<font color='red' size=1 name='arial'>";
			echo "<center> <b> Username/Password or member type Not matching <br>Please Try Again
		    </center><br/> <b> </font>";
			}
			}
			?>
	&nbsp;</td>
	</tr>
	<tr>
	  <td colspan="5"><a href="google_lib/config.php"> GOOGLE LOGIN </a>&nbsp;</td>
	  </tr>
	</form>
</table>
		</div>
	</div>
</div>
<script>
	function validate()
	{
 	   if( document.form1.name.value == "" )
   		{
     		alert( "Please provide your name!" );
     		document.form1.name.focus() ;
		    return false;
   		}
	   if( document.form1.password.value == "" )
	    {
     		alert( "Please provide your password!" );
		    document.form1.password.focus() ;
			return false;
	    }
		if( document.form1.member.value == "" )
	    {
     		alert( "Please select your member type!" );
		    document.form1.member.focus() ;
			return false;
	    }
		return( true );
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.js"></script>
<script src="bootstrap/docs/assets/js/docs.min.js"></script>
</body>	
</html>
