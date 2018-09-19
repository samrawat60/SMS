<?php
session_start();
include '../db.php';
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
	<table class="table table-striped table-hover table-bordered text-center">
			<tr class="bg-dark text-white">
				<th> Roll No </th>
				<th> Name </th>
				<th> City </th>	
				<th> Contact No </th>
				<th> Standard </th>
				<th> Image </th>
				
			</tr>
			
		<?php	
			
			
			$q = "select * from student`";
			$query = mysqli_query($con,$q);
			
			while($result = mysqli_fetch_array($query))
			{
		?>
			
			<tr>
				<td> <?php echo $result['rollno']; ?> </td>
				<td> <?php echo $result['name']; ?> </td>
				<td> <?php echo $result['city']; ?> </td>
				<td> <?php echo $result['pcont']; ?> </td>
				<td> <?php echo $result['standard']; ?> </td>
				<td><img src="../dataimg/<?php echo $result['image']; ?>" style="height:100px; width:100px;"> </td>
			</tr>
			
		<?php
			}
		?>
		</table>	
</div>