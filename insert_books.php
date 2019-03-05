<?php
$sql=mysqli_connect("localhost","root","","library");
error_reporting(0);
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$bprice=$_POST['bprice'];
$byear=$_POST['byear'];
$bsem=$_POST['bsem'];
	if(isset($_POST['insert'])){
	$query="insert into books(book_name,book_author,book_price,book_year,book_sem)values('$bname','$aname','$bprice','$byear','$bsem')";
	mysqli_query($sql,$query);
	echo"<script> alert('ADDED SUCCESSFULLY'); location='home.php';</script>";
}
?>	
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>LMS-Library Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
	<h1><u>LIBRARY MANAGEMENT SYSTEM</u></h1>
	<nav>
		<a href="home.php">Home</a>  | 
		<a href="delete_books.php">Delete Existing Book</a>  |
		<a href="update_books.php">Update Existing Book</a>
	</nav><br>
	<h3>ADD NEW BOOK:-</h3>
	<form method="post" action="#">
		<table>
			<tr>
				<td>BOOK-NAME:</td>
				<td><input type="text"name="bname" autofocus required></td>	
			</tr>
			<tr>
				<td>BOOK-AUTHOR:</td>
				<td><input type="text"name="aname"required></td>
			</tr>
			<tr>
				<td>BOOK-PRICE:</td>
				<td><input type="number"name="bprice"required></td>
			</tr>	
			<tr>	
				<td>BOOK-YEAR:</td>
				<td><input type="number"name="byear"required></td>
			</tr>
			<tr>
				<td>BOOK-SEMESTER:</td>
				<td><input type="number"name="bsem"required></td>
			</tr>
			<tr>
				<td><input type="submit" name="insert" value="Insert"></td>	
			</tr>
		</table>			
	</form>		
</center>
</body>
</html>