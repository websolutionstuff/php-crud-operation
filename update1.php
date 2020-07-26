<?php
include_once 'config.php';
session_start();
$id=$_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$department = $_POST['department'];
$query = "UPDATE register SET username='$username',password='$password', email='$email', department='$department' WHERE id='$id'";
$result = mysqli_query($con,$query);
if ($result) {
	header("location: display.php");
}
?>
