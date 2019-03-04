<?php
$sql=mysqli_connect("localhost","root","","library");
error_reporting(0);
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$bprice=$_POST['bprice'];
$byear=$_POST['byear'];
$bsem=$_POST['bsem'];
	if(isset($_POST['insert'])){
	$query="delete from books(book_name,book_author,book_price,book_year,book_sem)values('$bname','$aname','$bprice','$byear','$bsem')";
	mysqli_query($sql,$query);
	echo"<script> alert('DELETED SUCCESSFULLY'); location='home.php';</script>";
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
	<h3>DELETE BOOK:-</h3>
	<table border="10">
		<tr>
			<th>BOOK-NAME</th>
			<th>BOOK-AUTHOR</th>
			<th>BOOK-PRICE</th>
			<th>BOOK-YEAR</th>
			<th>BOOK-SEMESTER</th>
		</tr>
	<?php   
		$sql=mysqli_connect("localhost","root","","library");
		error_reporting(0);
		$query="select * from books";
		$result=mysqli_query($sql,$query);
		while($row=mysqli_fetch_assoc($result))
		{ ?>
				<tr>
					<td><?php echo $row['book_name'];  ?></td>
					<td><?php echo $row['book_author'];?></td>
					<td><?php echo $row['book_price']; ?></td>
					<td><?php echo $row['book_year'];  ?></td>
					<td><?php echo $row['book_sem'];   ?></td>
					<td><button name="bname">Delete</button></td>
				</tr>
			<?php
			}
	?>
	</table>				
</center>
</body>
</html>