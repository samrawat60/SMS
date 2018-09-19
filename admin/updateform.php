<?php
session_start();
include '../menu1.php';
include '../header.php'; // we include html starting code on this file 
include '../db.php';

	$sid = $_GET['sid'];
	
	$sql = "select * from student where id ='$sid'";
	$run = mysqli_query($con,$sql);
	
	$data = mysqli_fetch_assoc($run);

	if(isset($_SESSION['uid'])) // if session is set then print the echo statment
	{
		echo " ";
	}
	else // If session is not set then it will redirect me to Login page 
	{
		header('location: ../login.php');
	}
?>
<div class="container">
	<br><div class="card bg-info text-white text-center">
		<div class="card-body">
			<h1> Welcome to Admin Dashboard </h1>
		</div>
	</div>
	<form action="updatedata.php" method="post" enctype="multipart/form-data"> <!-- Enctype is use for Storing Images -->
		<table style="width:55%" align="center" class="table table-striped table-hover table-bordered">
			<tr>
				<th> Roll No </th>
				<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
			</tr>
			<tr>
				<th> Full Name </th>
				<td> <input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
			</tr>
			<tr>
				<th> City </th>
				<td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
			</tr>
			<tr>
				<th> Parents Contact No </th>
				<td><input type="text" name="pcont" value=<?php echo $data['pcont']; ?> required></td>
			</tr>
			<tr>
				<th> Standard </th>
				<td><input type="number" name="std" value=<?php echo $data['standard']; ?> required></td>
			</tr>
			<tr>
				<th> Image </th>
				<td><input type="file" name="img" required></td>
			</tr>
			<tr class="text-center">
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" >
				<td colspan=2><button type="submit" name="submit" class="btn-primary btn"> Submit </button></td>
			</tr>
			</table>
		</table>
	</form>