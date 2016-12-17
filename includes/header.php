<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Examinations</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
 	 	<div class="container-fluid">
 	 		<div class="navbar-header">
 	 			<a class="navbar-brand" href="#">Online Exam</a>
 	 		</div>
 	 		<div>
 	 		    <ul class="nav navbar-nav">
					<?php  if(isset($_SESSION['user']) && $_SESSION['user_type'] == 2 ) :?>
					<li></li>
					<?php else : ?>
 	 		    	<li><a href="index.php">Home</a></li>
					<?php endif; ?>
 	 		    </ul>
 	 			<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['user'])): ?>
						<li><a href="logout.php">Logout</a></li>
					<?php else : ?>
						<li><a href="admin.php">Admin</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Signup</a></li>
					<?php endif;?>
 	 			</ul>
 	 		</div>
 	 	</div>
 	</nav>
 <!--Navbar-->
   <div class="container">