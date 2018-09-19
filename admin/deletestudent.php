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
	</div>
	<form action="deletestudent.php" method="post">
		<table style="width:55%" align="center" class="table table-striped table-hover table-bordered">
			<tr>
				<th> Enter Standard </th>
				<td><input type="text" name="std" placeholder="Enter Standard" required></td>
			</tr>
			<tr>
				<th> Enter Student Name </th>
				<td> <input type="text" name="stuname" placeholder="Enter Student Name" ></td>
			</tr>
			<tr class="text-center">
				<td colspan=2><button type="submit" name="submit" class="btn-primary btn"> Search </button></td>
			</tr>
		</table>
	</form>

	<table class="table table-striped table-hover table-bordered text-center">
		<tr class="bg-dark text-white">
				<th> No </th>
				<th> Image </th>
				<th> Name </th>
				<th> Roll No </th>	
				<th> Edit </th>
		</tr>
		
		<?php
		if(isset($_POST['submit'])) // If only work when submit button is pressed
			{
				include '../db.php'; // Include Database File 
				
				$standard = $_POST['std'];
				$name = $_POST['stuname'];
				
				$query = "select * from student where standard='$standard' AND name LIKE '%$name%'";
				$run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($run)<1)
				{
					echo "<tr><td colspan='5'> No Records Found</td></tr>";
				}
				else
				{
					$count=0;
					while($data=mysqli_fetch_assoc($run))
					{
						$count++;
						?>
						<tr>
							<td> <?php echo $count; ?> </td>
							<td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;max-height:100px;"></td>
							<td> <?php echo $data['name']; ?></td>
							<td> <?php echo $data['rollno']; ?> </td>
							<td><button class="btn-danger btn"><a href="deleteform.php?sid=<?php echo $data['id']; ?>" class="text-white">  Delete </a> </button></td>
						</tr>
						
						<?php
					}
				}
			}
		?>
	</table>
</div>
</body>
</html>