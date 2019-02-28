<?php
session_start();
if(isset($_SESSION['uname1'])){
	header("location:books.php");
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
					header("location:books.php");
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
<html>
<head>
	<title>LMS-Library Management System</title>
	<link rel="icon" href="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
		.j1{
			/*background-color:#4842f4;*/
		}
</style>
</head>
<body>
	<div class="jumbotron j1">
		<div class="row">
			<div class="col-md-12 ">
				<h2>Welcome to Library Management System</h2>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-sm-12">
				<form method="POST">
					USERNAME: &nbsp;&nbsp;<input type="text" name="uname" placeholder="Enter Your Username">
					<br> <br>
					PASSWORD: &nbsp;&nbsp;<input type="text" name="pass" placeholder="Enter Your Password">
					<br><br>
					<input type="submit" name="login">
				</form>
			</div>
		</div>		
	</div>
</body>
</html>