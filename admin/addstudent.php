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
	<form action="addstudent.php" method="post" enctype="multipart/form-data"> <!-- Enctype is use for Storing Images -->
		<table style="width:55%" align="center" class="table table-striped table-hover table-bordered">
			<tr>
				<th> Roll No </th>
				<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
			</tr>
			<tr>
				<th> Full Name </th>
				<td> <input type="text" name="name" placeholder="Enter Full Name" required></td>
			</tr>
			<tr>
				<th> City </th>
				<td><input type="text" name="city" placeholder="Enter City" required></td>
			</tr>
			<tr>
				<th> Parents Contact No </th>
				<td><input type="text" name="pcont" placeholder="Enter Parents Contact No" required></td>
			</tr>
			<tr>
				<th> Standard </th>
				<td><input type="number" name="std" placeholder="Enter Standard" required></td>
			</tr>
			<tr>
				<th> Image </th>
				<td><input type="file" name="img" required></td>
			</tr>
			<tr class="text-center">
				<td colspan=2><button type="submit" name="submit" class="btn-primary btn"> Submit </button></td>
			</tr>
			</table>
		</table>
	</form>
</div>
</body>
</html>

<?php
include '../db.php';
if(isset($_POST['submit']))
{
	$rollno = $_POST['rollno'];
	$name   = $_POST['name'];
	$city   = $_POST['city'];
	$pcont  = $_POST['pcont'];
	$std    = $_POST['std'];
	$image  = $_FILES['img']['name'];
	$tempname = $_FILES['img']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$image");
	
	$query = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`) 
	VALUES ('$rollno','$name','$city','$pcont','$std','$image')";
	$run = mysqli_query($con,$query); // for fired the query
	
	if($run == true)
	{
		?>
		<script>	
			alert('Data Inserted Successfully');
		</script>
		<?php
	}
}
?>
