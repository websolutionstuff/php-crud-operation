<?php
	session_start();
	session_destroy();
	include 'config.php';
	header("location: login.php");
?>
