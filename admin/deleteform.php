<?php 
	include '../db.php';
	
	$id = $_REQUEST['sid'];
	
	$query = "delete from student where id = $id";
	$run = mysqli_query($con,$query); // for fired the query
	
	if($run == true)
	{
		?>
		<script>	
			alert('Data Deleted Successfully');
			window.open('deletestudent.php','_self'); // use for Page redirection
			// header('location:updateform.php?sid=$id');
		</script>
		<?php
	}

?>