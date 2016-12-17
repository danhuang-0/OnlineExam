 <?php include'includes/header.php'; ?>
   		<div class="jumbotron">
  			<h1 class="text-center">Welcome to Online Examination</h1>
  			<p class="text-center">Provides Multiple Choice questions on various Subjects</p>
  			<br>
  			<br>
  			<p>
  	  		<a <?php if(isset($_SESSION['user'])): ?>
				<?php echo 'href="exam.php"'; ?>
				<?php  else: ?>
				<?php echo 'href="login.php"'; ?>
				<?php endif; ?>
			><button class="btn btn-lg center-block btn-primary">Take Exam</button></a>
  			</p>
   		</div>
   		<div class="row">
   			<div class="col-12-xs intro">
   				<h3 class="text-center">Test Your Knowledge</h3>
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   				<p>
   			</div>
   		</div>
<?php include 'includes/footer.php'; ?>	