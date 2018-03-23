<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7 0007
 * Time: 21:47
 */
?>

<ul id="myTab" class="nav nav-tabs">
    <li >
        <a href="adminchoice.php" data-toggle="tab">history</a>
    </li>
    <li><a href="logintime.php" data-toggle="tab">login time</a></li>
    <li><a href="add.php" data-toggle="tab">add</a></li>
    <li class="active"><a href="browse.php?n=1" data-toggle="tab">browse</a></li>
</ul>

<?php
	define('QUES_PER_PAGE',3);
	$db = new Database();
	$query = "SELECT * FROM `questions`";
	$result = $db->select($query);
	$page_num = (int)$_GET['n'];
	//去除前几页
	for( $i=0; $i<($page_num-1)*QUES_PER_PAGE; $i++)
		$row = mysqli_fetch_array($result);
	echo "<br/><br/>";
	for( $i=0; $i<QUES_PER_PAGE; $i++)
	{
		//读没了
		if( !$row = mysqli_fetch_array($result) )
			break;
?>		
		<label><?php echo $row['question_number'].".&emsp;".$row['text']?>:</label>
<?php		
		$query = "SELECT * FROM `choices` WHERE question_number = '$row[question_number]' ";
		$result_choice = $db->select($query);
		while( $row_choice = mysqli_fetch_array($result_choice) )
		{
			
			echo "<label class=\"radio\">";
			if( $row_choice['is_correct']==1 )
				echo "Right:&emsp;".$row_choice['text'];
			else
				echo "&emsp;&emsp;&emsp;&emsp;".$row_choice['text'];
			echo "</label>";
		}
		echo "<br/><br/>";
	}
?>

<ul class="pagination">
    <li><a href="#">&laquo;</a></li>
	<?php
		$query = "SELECT * FROM `questions`";
		$result = $db->select($query);
		$total = $result->num_rows;
		$index = 0;
		do{
			$index += 1;
			$total -= 3;
			if( $page_num==$index )
				echo "<li class=\"active\"><a href=\"browse.php?n=$index\">$index</a></li>";
			else
				echo "<li><a href=\"browse.php?n=$index\">$index</a></li>";
		}while( $total>=0 );
	?>
    <li><a href="#">&raquo;</a></li>
</ul>