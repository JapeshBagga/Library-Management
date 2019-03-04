<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>LMS-Library Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
	<h1><u>LIBRARY MANAGEMENT SYSTEM</u></h1><br>
	<nav>
		<a href="insert_books.php">Add New Book</a> |
		<a href="delete_books.php">Delete Existing Book</a>  |
		<a href="update_books.php">Update Existing Book</a> 
	</nav><br><br>

	<form method="post" action="#">
		<input type="text" name="bname" placeholder="Search For the book">	
		<input type="submit" name="search">
	</form><br>
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
		$bname=$_POST['bname'];
		if(isset($_POST['search']))
		{
			$query="select * from books where book_name='$bname'";
			$result=mysqli_query($sql,$query);
			while($row=mysqli_fetch_assoc($result))
			{ ?>
				<tr>
					<td><?php echo $row['book_name'];  ?></td>
					<td><?php echo $row['book_author'];?></td>
					<td><?php echo $row['book_price']; ?></td>
					<td><?php echo $row['book_year'];  ?></td>
					<td><?php echo $row['book_sem'];   ?></td>
				</tr>
			<?php
		}	}
	?>
	</table>
</center>
</body>
</html>