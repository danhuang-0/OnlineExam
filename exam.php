<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
  $db = new Database();
  $query1 = "SELECT * FROM `questions`";
  $result = $db->select($query1);
  $total = $result->num_rows;
?>
<div class="jumbotron">
	<h2>Test Your Knowledge</h2>
	<ul>
 			<li><strong>Number of questions :</strong><?php echo $total; ?></li>
 			<li><strong>Type of questions :</strong> Multiple Choice</li>
 			<li><strong>Estimated Time :</strong><?php echo $total *.5; ?>Minutes</li>
 	</ul>
 		<a href="questions.php?n=1" class="btn btn-block btn-primary">Start</a>
</div>
<?php include 'includes/footer.php'; ?>