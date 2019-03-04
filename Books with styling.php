<?php
$sql=mysqli_connect("localhost","root","","library");
if(isset($_POST['submit'])){
	$query=""
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
		<div class="row justify-content-center">
				<h2><u>Welcome to Library Management System</u></h2>
				<br><br>
		</div>
		<br><br>
		<div class="row">
			<div class="col-lg-4">
				<form method="post" action="">
					<div class="form-group">	
						<label for="bname">BOOK-NAME:</label>
						<input type="text"class="form-control"name="bname"id="bname"placeholder="Enter the Name of the Book">

						<label for="aname">BOOK-AUTHOR:</label>
						<input type="text"class="form-control"name="aname" id="aname"placeholder="Enter the Book Author">

						<label for="bprice">BOOK-PRICE:</label>
						<input type="number"class="form-control"name="bprice"id="byear"placeholder="Enter the Book Price">

						<label for="byear">BOOK-YEAR:</label>
						<input type="number"class="form-control"name="byear"id="byear"placeholder="Enter the Book Published Year">
						
						<label for="bbsem">BOOK-SEMESTER:</label>
						<input type="number"class="form-control"name="bsem"id="bsem"placeholder="Enter the Semester for which book is made"><br>

						<button class="btn" name="submit">Submit </button>
					</div>
				</form>
			</div>
			<div class="col-lg-8">
			<h2>Space for image</h2>
			</div>
		</div>
	</div>

</body>
</html>