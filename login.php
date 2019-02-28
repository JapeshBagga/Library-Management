<?php
	$mysql=mysqli_connect("localhost","root","","library");
	if(isset($_POST['login'])) {
		$mysql_query="insert into login (uname,pass) values ('$_POST[uname]','$_POST[pass]')";
		mysqli_query($mysql,$mysql_query);
		header('ADDED SUCESSFULLY');
	}
?>
<!DOCTYPE html>
<head>
</head>
<body>	
	<H2>Welcome New User</H2>
	<p>Please Enter these 2 columns username and password in order to create new username and password.</p>
	<form method="POST">
		USERNAME: &nbsp;&nbsp;<input type="text" name="uname" placeholder="Enter Your Username">
		<br> <br>
		PASSWORD: &nbsp;&nbsp;<input type="text" name="pass" placeholder="Enter Your Password">
		<input type="submit" name="login">
	</form>
</body>
</html>