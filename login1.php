<?php
include_once 'config.php';
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$_session["uname"]=$username;
$query="select * from register where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num >= 1)
{
		header("location:display.php?username=$username");
}
else
{
	echo '<script type="text/javascript">alert("Enter valid username and password"); window.location = "login.php";</script>';
}
?>
