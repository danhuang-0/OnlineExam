<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7 0007
 * Time: 14:19
*/
$db = new Database();
$sql = "SELECT * FROM `score`";
$result = $db->select($sql);
?>
<div>


    <ul id="myTab" class="nav nav-tabs">
        <li class="active">
            <a href="adminchoice.php" data-toggle="tab">history</a>
		</li>
        <li><a href="logintime.php" data-toggle="tab">login time</a></li>
        <li><a href="add.php" data-toggle="tab">add</a></li>
        <li><a href="browse.php?n=1" data-toggle="tab">browse</a></li>
    </ul>


</div>
    <table class="table table-hover" >
        <caption></caption>
        <tr><th></th><th>name</th><th>time</th><th>score</th></tr>
        <?php
		while( $row = mysqli_fetch_array($result) )
	    {
			//获得用户ID
			$user_id=$row['user_id'];
			//通过ID查找名字
			$sql = "SELECT name FROM user WHERE id='$user_id'";
			$result_name = $db->select($sql);
			//错误数据
			if( !$result_name )
				continue;
			$row_name = mysqli_fetch_array($result_name);
			//记录名字
			$user_name = $row_name['name'];
			$time=$row['time'];
			$score=$row['score'];
			echo "<tr><td></td><td>$user_name</td><td>$time</td><td>$score</td></tr>";
	    }
		?>
    </table>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

</br></br></br></br></br></br></br></br></br>




<?php include 'includes/footer.php';?>