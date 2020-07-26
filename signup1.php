<?php
include_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$department = $_POST['department'];
$query = "insert into register values(NULL,'$username','$password','$email','$department')";
$result = mysqli_query($con,$query);
if($result)
{

		header("location: login.php");

}
?>
