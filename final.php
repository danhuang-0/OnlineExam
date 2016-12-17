<?php include 'includes/header.php'; ?>
<div class="jumbotron">
	    <h1 class="text-center">Congrats! You Have Completed The Test </h1>
 		<p>That's It Over</p>
 		<p>Final Socre : <?php echo $_SESSION['score']; ?></p>
 		<a href="questions.php?n=1" class="btn btn-primary">Take Again</a>
</div>
<?php include 'includes/footer.php'; ?>