<?php
include_once 'config.php';

$id = $_REQUEST[delete];
$query = "delete from register where id='$id' ";
$result = mysqli_query($con,$query);

if($result)
{
	header("location: display.php");
}
?>
