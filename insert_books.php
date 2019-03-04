<?php
$sql=mysqli_connect("localhost","root","","library");
error_reporting(0);
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$bprice=$_POST['bprice'];
$byear=$_POST['byear'];
$bsem=$_POST['bsem'];
	if(isset($_POST['submit'])){
	$query="insert into books(book_name,book_author,book_price,book_year,book_sem)values('$bname','$aname','$bprice','$byear',
	'$bsem')";
	mysqli_query($sql,$query);
	echo"<script> alert('ADDED SUCCESSFULLY') </script>";
}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>LMS-Library Management System</title>
</head>
<body>
	<h1><u>LIBRARY MANAGEMENT SYSTEM</u></h1>
	<form method="post" >
		<table>
		<center>
			<tr>
				<td>BOOK-NAME:</td>
				<td><input type="text"name="bname"></td>	
			</tr>
			<tr>
				<td>BOOK-AUTHOR:</td>
				<td><input type="text"name="aname"></td>
			</tr>
			<tr>
				<td>BOOK-PRICE:</td>
				<td><input type="number"name="bprice"></td>
			</tr>	
			<tr>	
				<td>BOOK-YEAR:</td>
				<td><input type="number"name="byear"></td>
			</tr>
			<tr>
				<td>BOOK-SEMESTER:</td>
				<td><input type="number"name="bsem"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>	
			</tr>
		</center>
		</table>			
	</form>		
</body>
</html>