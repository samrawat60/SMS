<?php
session_start();
include '../menu1.php';
include '../header.php'; // we include html starting code on this file 

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
	</div><br>
	<table style="width:50%" align="center" class="table table-striped table-hover table-bordered text-center">
		<tr>
			<th> 1. </th>
			<th><a href="addstudent.php"> Insert Student </a></th>
		</tr>
		<tr>
			<th> 2. </th>
			<th><a href="updatestudent.php"> Update  Student </a></th>
		</tr>
		<tr>
			<th> 3. </th>
			<th><a href="deletestudent.php"> Delete Student </a></th>
		</tr>
		<tr>
			<th> 4. </th>
			<th><a href="displaystudent.php"> Display Student </a></th>
		</tr>
	</table>
</div>
</body>
</html>


