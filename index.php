<?php
session_start();
if(isset($_SESSION['uname1'])){
	header("location:home.php");
}
?>

<?php
	$sql=mysqli_connect("localhost","root","","library");
	if (isset($_POST['login'])){
		$query="select * from login where uname='$_POST[uname]'";
		$result = mysqli_query($sql,$query);
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_assoc($result)){
				if ($_POST['uname']==$row['uname'] && $_POST['pass']==$row['pass']) {
					$_SESSION['uname1']=$_POST['uname'];
					header("location:home.php");
				}
				else{
					echo("INVALID PASSSWORD");
				}
			}
		}
		else{
			echo("INVALID USERNAME");
		}
	}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>LMS-Library Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
		.j1{
			/*background-color:#4842f4;*/
		}
</style>
</head>
<body>
<center>
	<h2>Welcome to Library Management System</h2>
		<div class="row">
			<div class="col-sm-12">
				<form method="POST">
					USERNAME: &nbsp;&nbsp;<input type="text" name="uname" placeholder="Enter Your Username" autofocus required>
					<br> <br>
					PASSWORD: &nbsp;&nbsp;<input type="text" name="pass" placeholder="Enter Your Password" required>
					<br><br>
					<input type="submit" name="login">
				</form>
			</div>
		</div>		
	</div>
</center>
</body>
</html>