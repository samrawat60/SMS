<?php 
	include '../db.php';
	$rollno = $_POST['rollno'];
	$name   = $_POST['name'];
	$city   = $_POST['city'];
	$pcont  = $_POST['pcont'];
	$std    = $_POST['std'];
	$id 	= $_POST['sid'];
	$image  = $_FILES['img']['name'];
	$tempname = $_FILES['img']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$image");
	
	$query = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$std', `image` = '$image' WHERE `id` = $id;";
	$run = mysqli_query($con,$query); // for fired the query
	
	if($run == true)
	{
		?>
		<script>	
			alert('Data Updated Successfully');
			window.open('updateform.php?sid=<?php echo $id; ?>','_self'); // use for Page redirection
			// header('location:updateform.php?sid=$id');
		</script>
		<?php
	}

?>