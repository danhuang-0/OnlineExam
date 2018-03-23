<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7 0007
 * Time: 20:50
 */
?>
<div>
    <ul id="myTab" class="nav nav-tabs">
        <li >
            <a href="adminchoice.php" data-toggle="tab">history</a>
        </li>
        <li class="active"><a href="logintime.php" data-toggle="tab">login time</a></li>
        <li><a href="add.php" data-toggle="tab">add</a></li>
        <li ><a href="browse.php?n=1" data-toggle="tab">browse</a></li>
    </ul>

</div>
<br/>  <br/>

    <table class="table">
        <thead>
        <tr><th>name</th><th>last login time</th></tr>
        </thead>
        <tbody>
		<?php
			$db = new Database();
			$query = "SELECT name,last_login_time FROM user LEFT JOIN last_login_time ON user.id=last_login_time.user_id WHERE user.user_type=1";
			$result = $db->select($query);
			if( $result )
			{
				while( $row = mysqli_fetch_array($result) )
				{
					$user_name=$row['name'];
					$time = $row['last_login_time'];
					if( $time )
						echo "<tr class=\"active\"></td><td>$user_name</td><td>$time</td></tr>";
					else
						echo "<tr class=\"active\"></td><td>$user_name</td><td>never login</td></tr>";
				}
				
			}
		?>
        </tbody>
    </table>
<?php include 'includes/footer.php';?>