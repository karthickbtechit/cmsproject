<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
	header('location:index.php');
	}
?>
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
	<h2>Post Your add with us </h2>
	<?php 
		include('menu.php');
	?>
  <table width="515">
	<form action="post_add_page_backend.php" method="post" name="form" id="form" onSubmit="return validate()"> 
  		<tr>
		    <td>&nbsp;</td>
		    <td colspan="2">&nbsp;</td>
		    <td>&nbsp;</td>
		</tr>
		<tr>
		    <td width="146">Add Title </td>
		    <td colspan="2"><label><input type="text" name="title" id="title"/></label></td>
		    <td width="46">&nbsp;</td>
		</tr>
		<tr>
		    <td>Description</td>
		    <td colspan="2"><label><textarea name="description" id="description"> </textarea></label></td>
		    <td>&nbsp;</td>
		</tr>
		<tr>
		    <td>Attach Files </td>
		    <td colspan="2"><label><input type="file" name="file" id="file" /></label></td>
		    <td>&nbsp;</td>
		</tr>
		<tr>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
		</tr>
	    <tr>
		    <td>&nbsp;</td>
		    <td width="48"><label><input type="submit" name="add" value="Add" id="add" /></label></td>
		    <td width="255"><label><input type="reset" name="cancel" value="cancel" /></label></td>
		    <td>&nbsp;</td>
		</tr>
		<tr>
		    <td>&nbsp;</td>
		    <td colspan="2">&nbsp;</td>
		    <td>&nbsp;</td>
		</tr>
	</form>
  </table>
</div>
<!--wapper Part Ends -->
<script type="text/javascript">
<!--
// Form validation code will come here.
   function validate()
	{
   	 if( document.form.title.value == "" )
     {
      alert( "Please provide Add Title!" );
      document.form.title.focus() ;
      return false;
     }
     if( document.form.description.value == "" )
     {
      alert( "Please Provide Description!" );
      document.form.password.focus() ;
      return false;
     }
      return( true );
	}
</script>
</body>
</html>
