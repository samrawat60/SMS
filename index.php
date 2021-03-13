<?php
//this is just for testing in rahul-demo


echo "rahul demo class";
include 'menu.php';
include 'header.php'; // we include html starting code on this file 
?>

	<div class="container">
		<h3 class="text-right"><a href="login.php"> Admin Panel </a></h3>
		<h1 class="text-center"> Welcome to Student Managment System </h1>
		
		<form action="index.php" method="post">
			<table style="width:50%" align="center" class="table table-striped table-hover table-bordered text-center">
				<tr>
					<th colspan="2" class="text-center"> Student Information </th>
				</tr>
				<tr>
					<th class="text-center"> Choose Standard </th>
					<td> <select name="std">
							<option value="1"> 1st </option>
							<option value="2"> 2nd </option>
							<option value="3"> 3rd </option>
							<option value="4"> 4th </option>
							<option value="5"> 5th </option>
							<option value="6"> 6th </option>
							<option value="7"> 7th </option>
							<option value="8"> 8th </option>
							<option value="9"> 9th </option>
							<option value="10"> 10th </option>
							<option value="11"> 11th </option>
							<option value="12"> 12th </option>
						</select>
				</tr>
				<tr>
					<th class="text-center"> Enter Roll No </th>
					<td> <input type="text" name="rollno" required> </td>
				</tr>
				<tr>
					<td colspan=2><button type="submit" name="submit" class="btn-success btn"> Show Info </button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<?php


if(isset($_POST['submit']))
{
	$standard 	= $_POST['std'];
	$rollno 	= $_POST['rollno'];

	include 'db.php';
	include 'function.php';	
	
	showdetails($standard,$rollno);
}

?>

