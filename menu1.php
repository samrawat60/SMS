<!--This menu page is only for Admin Dashboard-->
<?php
include 'header.php';
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Student Management System </a>
  
	<!-- Left align -->
	<div class="collapse navbar-collapse justify-content-between" id="navbar"> 
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="../login.php">Admin Panel</a>
			</li>
		</ul>
  
		<!--right align -->
		<ul class="navbar-nav navbar-right">
			<li class="nav-item">
				<a class="nav-link" href="../logout.php">Logout</a>
			</li>
		</ul>
	</div>
</nav>
</body>
</html>
