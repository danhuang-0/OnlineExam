<?php include 'includes/header.php'; ?>
<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php
   $number = (int) $_GET['n'];
   $db = new Database();
   $query = "SELECT * FROM `questions` WHERE question_number = $number";
   $result = $db->select($query);
   $query = "SELECT * FROM `choices` WHERE question_number = $number";
   $choices = $db->select($query);
   $query1 = "SELECT * FROM `questions`";
   $results = $db->select($query1);
   $count = $results->num_rows;
?>
<div class="jumbotron">
	<h3 class="text-center"><?php echo "Question ".$number." of ".$count; ?></h3>
	<h4 class="text-center">What Does PHP Stands for ?</h4>
</div>
<form class="form-horizontal" action="process.php" method="post">
	<ul class="question">
     <?php while($row = $choices->fetch_assoc()) : ?>
		<li><input type='radio' name='choice' value='<?php echo $row['id']; ?>'/>
			<?php echo $row['text']; ?></li>
	 <?php endwhile; ?>
	</ul>
	<input type="submit" value="Next" class="btn btn-success center-block btn-block" name="submit"/>
	<input type="hidden" name="number" value ="<?php echo $number; ?>"/>
</form>
<?php include 'includes/footer.php'; ?>