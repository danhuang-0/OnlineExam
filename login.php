<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php'; ?>
<?php
$db = new Database();
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user WHERE email ='$username' AND password ='$password' AND user_type = 1";
  $result = $db->select($query);
  if($result){
    $row  = $result->fetch_assoc();
    $count = $result->num_rows;
    if($count == 1){
      $_SESSION['user'] = $row['email'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['user_type'] = $row['user_type'];
      header('Location: index.php');
    }
  }
  else{
    echo 'your username and password is invalid';
  }
}
?>
<?php if(isset($_SESSION['user'])): ?>
  <?php header("Location:index.php"); ?>
<?php else : ?>
  <div class="jumbotron">
    <h2 class="text-center">Student Panel</h2>
  </div>
  <div class="wrapper">
    <form action="login.php" method="post"class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login"/>
    </form>
  </div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>