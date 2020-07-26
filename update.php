<?php 
include_once 'config.php';
session_start();
$id = $_REQUEST['update'];
$query = "SELECT * FROM register WHERE id='$id';";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>Update student</title>
<style>
body{
 	background-image:url("6.jpg");
	background-size:cover;
	background-repeat:no-repeat;	
}
.division{
	background: white;
	opacity:0.9;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 30%;
	margin: 7% 20% 0% 33%;
	display:block;
	position: relative;
}
input{
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 20px;
}
.more{
	font-size:30px;
	font-style:solid;
	font-family:Arial;
	background-color:#00ff99;
	
}	
</style>
</head>
<body>
<div class="division">
	<h1>Update Student</h1>
	<form action="update1.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		UserName: <input type="text" name="username" size="30" value="<?php echo $row['username'];?>">
		<br>
		Password: <input type="text" name="password" size="30" value="<?php echo $row['password'];?>">
		<br>
		email id <input type="text" name="email" size="30" value="<?php echo $row['email'];?>">
		<br>
		Department <input type="text" name="department" size="30" value="<?php echo $row['department'];?>">
		<br>
		<input type="submit" class="more" name="submit" value="Update Student">
	</form>
</div>
</body>
</html>
