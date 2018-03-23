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
   		
<?php include 'includes/footer.php'; ?>	