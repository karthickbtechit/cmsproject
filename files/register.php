<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>User Registration </title>
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
	body {
	}
	body a {
	text-decoration:none;
	color:#0099CC;
	}
	body A:hover {
	text-decoration:none; color:#000;
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
	  <div class="span2">
			<table class="border col-md-3">
				<form name="form1"  class="form-signin" method="post" action="register_data.php" onSubmit="return validate()">
				<tr>
			    	<td width="2">&nbsp;</td>
			    	<td width="13">&nbsp;</td>
			    	<td colspan="3"><div align="center">
			    	  <p>&nbsp;</p>
			    	  <p><strong>New User Registration !</strong> </p>
			    	</div></td>
			    	<td width="10">&nbsp;</td>
				</tr>
				<tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3">&nbsp;</td>
				    <td>&nbsp;</td>
				</tr>
			    <tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3">
					<input type="text" name="name" value="" id="name" aria-describedby="name"  class="form-control" placeholder="Choose your user name"/>&nbsp;</td>
				    <td>&nbsp;</td>
				</tr>
				<tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3">
				    <input type="password" name="password" id="password" class="form-control" placeholder="Choose your password" />   </td>
				    <td>&nbsp;</td>
			    </tr>
				<tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3"><p>&nbsp;
			        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your e-mail address" /></td>
				    <td>&nbsp;</td>
				</tr>
			    <tr>
				    <td>&nbsp;</td>
    				<td>&nbsp;</td>
				    <td colspan="3"><input type="text" name="phone" id="phone" maxlength="10" class="form-control" placeholder="Enter your phone number" />&nbsp;</td>
				    <td>&nbsp;</td>
			   </tr>
			   <tr>
  				    <td>&nbsp;</td>
  					<td>&nbsp;</td>
   					<td colspan="3"><select value="member" id="member" name="member" class="form-control">
					<option value=""> Select your membership type</option> 
					<option value="member"> member</option> 
					<option value="admin"> admin</option> 	
				 </select></td>
				    <td>&nbsp;</td>
			  </tr>
			   <tr>
			     <td>&nbsp;</td>
			     <td>&nbsp;</td>
			     <td colspan="3">&nbsp;</td>
			     <td>&nbsp;</td>
			     </tr>
			   <tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3"><label>
				    <input type="checkbox" name="checkbox" value="checkbox" />agree</label>
				    <a href="register.php?termsandconditions=1">&nbsp;&nbsp;terms & conditions</a> </td>
					<td>&nbsp;</td>
			  </tr>
			  <tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td width="113">
				    <input type="submit" name="Submit" value="Submit" class="btn btn-block btn-primary" /></td>
				    <td width="3">&nbsp;</td>
				    <td width="110"><input type="reset" name="reset" value="Reset" class="btn btn-block" /></td>
				    <td>&nbsp;</td>
			 </tr>
			  <tr>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td colspan="3" ></td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td colspan="3" ><a href="index.php" class="btn btn-block btn-info">Already a member Login here? </a></td>
				    <td>&nbsp;</td>
			 </tr>
			 <tr>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td colspan="3">&nbsp;</td>
			   <td>&nbsp;</td>
			   </tr>
			 </form>  
			 </table>
		</div>
		<div class="span4">
	<?php
	if (isset($_GET['termsandconditions']))
	{
	$termsandconditions=$_GET['termsandconditions'];
	if ($termsandconditions==1)
	{
	echo "<br><br><br>";
	echo "<font color='#2a8fcd' size=1 name='arial'>";
	echo "<center> <b><p><p> Terms and Conditions</p> 1) DEFINITIONS “Goods” means any goods and/or services provided by the Company as ordered by the Client “ Company” means Sample Answers Ltd. incorporating Prime Prospects. “ Client” means the person, firm or company placing an order with the Company.<br> 2) APPLICATION These terms and conditions apply to any provision of services or materials by the Company to the Client.<br>
3) FORMATION OF CONTRACT All Goods sold by the Company are sold subject to the Company’s standard terms and conditions (as detailed below) which form part of the Client’s contract with the Company. Terms and conditions on the Client’s order form or other similar document shall not be binding on the Company.<br> 4) GOVERNING LAW These Terms of Trading shall be subject to and construed in accordance with the laws of England and the parties hereby submit to the exclusive jurisdiction of the English courts.</p><br>
    </center><br/> <b> </font>";
	}
	}
	?>
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
// Form validation code will come here.
	function validate()
	{
		   if( document.form1.name.value == "" )
			{
		   	alert( "Please choose your name!" );
	        document.form1.name.focus() ;
            return false;
   			}
 	       if( document.form1.password.value == "" )
	    	{
     	    alert( "Please choose your password!" );
            document.form1.password.focus() ;
	        return false;
   			}
   			{
 		    var emailID = document.form1.email.value;
   		    atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");
		    if (atpos < 1 || ( dotpos - atpos < 2 )) 
	   		{
    	    alert("Please enter correct email ID")
       	    document.form1.email.focus() ;
	        return false;
   	   		}
			{
		    var phonee = document.form1.phone;
    		var RE = /^\d{10}$/;
    	    if(!RE.test(phonee.value))
    		{
        	alert("You have entered an invalid phone number");
        	return false;
    		}   
		    }
			if(document.form1.member.value == "" )
		    {
	  	    alert( "Please choose your membership type!" );
		    document.form1.member.focus() ;
		    return false;
		    }
			if(!document.form1.checkbox.checked )
   			{
		    alert( "Please agree terms and conditions!" );
	 	    document.form1.checkbox.focus() ;
     		return false;
			}
			return( true );
	}
/*  if( document.form1.email.value == "" )
   {
     alert( "Please provide your Email!" );
     document.form1.email.focus() ;
     return false;
   }*/
/*    if( document.form1.phone.value == "" )
   {
     alert( "Please provide your Phone number!" );
     document.form1.phone.focus() ;
     return false;
   } */
  			{
		    var phonee = document.form1.phone;
    		var RE = /^\d{10}$/;
    	   if(!RE.test(phonee.value))
    		{
        	alert("You have entered an invalid phone number");
        	return false;
    		}   
		    }
      	   if( document.form1.address.value == "" )
   			{
     		alert( "Please provide your address!" );
		    document.form1.address.focus() ;
		    return false;
		    }
	       if(document.form1.member.value == "member" )
		    {
	  	    alert( "Please choose your membership type!" );
		    document.form1.member.focus() ;
		    return false;
		    }
   		   if(!document.form1.checkbox.checked )
   			{
		    alert( "Please agree terms and conditions!" );
	 	    document.form1.checkbox.focus() ;
     		return false;
			}
		    return( true );
			}
/*function validateEmail()
{
 
   var emailID = document.form1.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert("Please enter correct email ID")
       document.form1.email.focus() ;
       return false;
   }
   return( true );
}*/
//-->
</script>
</body>	
</html>
