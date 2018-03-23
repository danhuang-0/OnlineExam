<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<div class="jumbotron">
	    <h1 class="text-center">Congrats! You Have Completed The Test </h1>
 		<p>That's It Over</p>
 		<p>Final Score : <?php echo $_SESSION['score']; ?></p>
		<?php
			$db = new Database();
			$date = date("Y-m-d H:i:s");
			$id = $_SESSION['id'];
			$finalScore = $_SESSION['score'];
			$query = "INSERT INTO `score`(user_id,time,score)VALUES('$id','$date','$finalScore')";
			$db->insert($query);
			$_SESSION['score']=0;
		?>
 		<a href="questions.php?n=1" class="btn btn-primary">Take Again</a>
</div>
<?php include 'includes/footer.php'; ?>