<?php 
include 'header.php'; // we include html starting code on this file 

function showdetails($standard,$rollno)
{
	include 'db.php'; 
	$query = "SELECT * FROM student WHERE rollno ='$rollno' AND standard ='$standard'";
	$run = mysqli_query($con,$query);

	
	if(mysqli_num_rows($run)>0)
	{
		$data = mysqli_fetch_assoc($run);
		?>
		<table style="width:60%" align="center" class="table table-striped  table-hover table-bordered">
			<tr class="text-center table-primary">
				<th colspan=3><h3> Student Details</h3> </th>			
			</tr>
			<tr>
				<td class="text-center" rowspan=5><img src="dataimg/<?php echo $data['image']; ?>" style="height:200px; width:200px;"> </td>
				<th> Roll No </th>
				<td><?php echo $data['rollno']; ?> </td>
			</tr>
			<tr class="table-success">
				<th> Name </th>
				<td><?php echo $data['name']; ?> </td>
			</tr>
			<tr>
				<th> Standard </th>
				<td><?php echo $data['standard']; ?> </td>
			</tr>
			<tr class="table-success">
				<th> Parents Contact No </th>
				<td><?php echo $data['pcont']; ?> </td>
			</tr>
			<tr>
				<th> City </th>
				<td><?php echo $data['city']; ?> </td>
			</tr>
		</table>
		
		<?php
		
	}
	else 
	{ 
		echo "<script> alert('No Student Found'); </script>";
	}
}
?>