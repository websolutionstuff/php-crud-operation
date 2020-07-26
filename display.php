<?php
	include 'config.php';
	session_start();
	if(isset($_REQUEST['username'])){
	$username=$_REQUEST['username'];
	$_SESSION['uname']=$username;
	}
?>
<html>
<head>
<title>display</title>
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
	width: 55%;
	margin: 10% 20% 0% 20%;
	display:block;
	position: relative;
}
input,th{
	padding: 15px;
	border: 1px solid #000;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #fff;
	text-size: 20px;
	background-color:#337ab7;
}
.done{	
	font-size:auto;
	font-style:solid;
	font-family:Arial;
	background-color:#449d44;
	margin-top: 10px;
}
</style>
</head>
<body>
<div class="division">
	<table  cellpadding="5" border="1px black solid">
	<tr>
		<th>Name</th>
		<!-- <th>Password</th> -->
		<th>Email</th>
		<th>Department</th>
		<th colspan="2">Action</th>
	</tr>
	<?php	
	$query="select * from register";
	$result=mysqli_query($con,$query);
	echo "Welcome ";
	echo $_SESSION['uname'];
	while($db=mysqli_fetch_array($result))
	{	?>
	
		<tr>
		
			<td><?php echo $db['username']?></td>
			<!-- <td><?php echo $db['password']?></td> -->
			<td><?php echo $db['email']?></td>
			<td><?php echo $db['department']?></td>
			<td><a href="update.php?update=<?php echo $db['id'];?>"><input type="submit" style="color: #fff;background-color: #337ab7;border-color: #2e6da4;" value="Update"/></a></td>
			<td><a href="delete.php?delete=<?php echo $db['id'];?>"><input type="submit" style="color: #fff;background-color: red;" value="Delete"/></a></td>
		</tr>
		
			<?php
	}
	?>
	</table>
	<!--<a href="signup.php"  class="more">Add Student</a>-->
	<!-- <td><a href="signup.php" ><input type="submit" class="done" value="Add Student"></td></a> -->
	<td><a href="logout.php" ><input type="submit" name="logout" class="done" value="Log out" ></a></td>
			
</div>
</body>
</html>
