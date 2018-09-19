<?php
session_start();
include 'menu.php';
include 'header.php'; // we include html starting code on this file 

// here isset is use for - it is check only when the session is set otherwise don't check it
// if isset session uid is already set then only redirect this to admindash.php

if(isset($_SESSION['uid'])) 
{
	header('location:admin/admindash.php'); 	
}
?>

	<div class="container">
		<div class="col-lg-6 m-auto">
			<form method="post" action="login.php">
				<br><div class="card">
					<div class="card-header bg-dark">
						<h1 class="text-white text-center"> Admin Login </h1>
					</div><br>
					
					<label> Username </label>
					<input type="text" name="uname" class="form-control"><br>
					
					<label> Password </label>
					<input type="password" name="pass" class="form-control"><br>
					
					<button type="submit" name="submit" class="btn btn-success"> Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

<?php
include ('db.php');

if(isset($_POST['submit']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	
	// $query = "SELECT * FROM `admin` WHERE `username`= '$username' AND `password`='$password'";
	$query = "SELECT * FROM admin WHERE username= '$username' AND password='$password'";
	$run = mysqli_query($con,$query);
	$row = mysqli_num_rows($run);
	
	if($row < 1)
	{
		?>
		<script>	
			alert('Username or Password Incorrect !!'); 
			window.open('login.php','_self'); // If username & pw doesn't match it will redirect to login.php page//
		</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_array($run); 
		
		$id=$data['id'];
		$_SESSION['uid'] = $id;
		header('location:admin/admindash.php');
		// echo "id = ".$id; // if this will print that's means the code is working fine till here  
	}
}
?>