<html>
<head>
<title>Log in</title>

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
	margin: 10% 20% 0% 33%;
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
	<form name="reg" action="login1.php" method="post">
		<table  cellpadding="5" align="center">
		<tr>
			<td><input type="text" name="username" placeholder="User Name" required/></td> 
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Password" required/></td>
		</tr>
		<tr>
			<td><input type="submit" class="more" value="log in" ></td>
		</tr>
		</table>
		<center><a href="signup.php">Sign up</a></center>
	</form>
</div>
</body>
</html>
