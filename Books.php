<?php
$sql=mysqli_connect("localhost","root","","library");
<if(isset($_POST['submit']))



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
		<div class="row justify-content-center">
				<h2>Welcome to Library Management System</h2>
		</div>
		<div class="form">
			<form method="POST">
					BOOK-NAME: &nbsp;&nbsp;<input type="text" name="bname" placeholder="Enter The Name of the Book">
					<br> <br>
					BOOK-AUTHOR: &nbsp;&nbsp;<input type="text" name="aname" placeholder="Enter Book Author">
					<br> <br>
					BOOK-PRICE: &nbsp;&nbsp;<input type="number" name="bprice" placeholder="Enter The Price">
					<br> <br>
					BOOK-YEAR: &nbsp;&nbsp;<input type="number" name="byear" placeholder="Enter The Published Year">
					<br> <br>
					BOOK-SEMESTER: &nbsp;&nbsp;<input type="number" name="bsem" placeholder="Enter The Particular Semester for which it is made">
					<br> <br>
					<input type="submit" name="login">
			</form>
		</div>
	</div>

</body>
</html>
