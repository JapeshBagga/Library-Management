<?php
$sql=mysqli_connect("localhost","root","","library");
error_reporting(0);
$bname=$_POST['bname'];
$aname=$_POST['aname'];
$bprice=$_POST['bprice'];
$byear=$_POST['byear'];
$bsem=$_POST['bsem'];
	if(isset($_POST['insert'])){
	$query="update books set book_name='$bname',book_author='$aname',book_price='$bprice',book_year='$byear',book_sem='$bsem' where id='$id'";
	mysqli_query($sql,$query);
	echo"<script> alert('UPDATED SUCCESSFULLY'); location='home.php';</script>";
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
		<a href="insert_books.php">Add New Book</a> |
		<a href="delete_books.php">Delete Existing Book</a>
	</nav><br>
	<h3>UPDATE BOOK & ITS DETAILS:-</h3>
	<table border="10">
		<tr>
			<th>BOOK-ID</th>
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
					<td><?php echo"<a href='updating.php?id=$row[id]'>Update</a>";?>
					</td>
				</tr>
			<?php
			}
	?>
	</table>				
</center>
</body>
</html>
