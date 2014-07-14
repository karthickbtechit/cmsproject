<?php
session_start();
include('connect.php');
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['member'];
$sql = "select * from login_register where name = '$name' and password = '$password' and role = '$role'";
$retain = mysql_query($sql, $con);
// Mysql_num_row is counting table row
$count=mysql_num_rows($retain);
$row=mysql_fetch_array($retain);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1)
   {
// Register $myusername, $mypassword and redirect to file "login_success.php"
//$_SESSION['name']=$row['name'];
//$_SESSION['role']=$row['role'];
//$_SESSION['User'] = array('name' => '$name', 'password' => '$password' , 'role' => '$member');
//header("location:admin_home.php");
if ( $role == "admin")
	 {
     $_SESSION['adminuser']=$_POST['name'];
     header("location:admin_home.php");
 	 }
else  if ( $role == "member")
	 {
     header("location:member_home.php");
     $_SESSION['user']=$_POST['name'];
 	 }
   }
else {
	 header("location:index.php?error=1");
	 }
mysql_close($con);
?>
<?php
/*if(isset($_POST['user']) && !empty($_POST['pass'])){
$uid = "mikel";
$pid = "thecodertips";
if($_POST['user'] != $uid){
die("Wrong username..");
}
if($_POST['pass'] != $pid){
die("Wrong password..");
}
echo 'Welcome.';
}*/
?>
