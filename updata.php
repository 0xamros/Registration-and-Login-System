<?php include('connect.php')?>

<?php
$usr=$_COOKIE['username'];
	 if (!isset($_COOKIE['username'])) {
     echo ' <script> alert("session timeout");window.location.href = "logins.php"</script> ';
      //die();
    }
 ?>

<?php
$errors = array();
if (isset($_POST['login_user'])) {
  $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

echo $password;
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }



    $user = $db->prepare("SELECT count(*) as count FROM users WHERE username='$username' LIMIT 1");
  $user->execute();
  while ($row = $user->fetch(PDO::FETCH_ASSOC)) {
    $counter = $row['count'];
    }
  if ($counter>=1) { // if user exists
    
      array_push($errors, "Username already exists");
    
  }




  if (count($errors) == 0) {
    $password = md5($password);

    $sql1=$db->prepare("update users set password='$password' where username='$usr'");
    $sql1->execute();
    $sql=$db->prepare("update users set username='$username' where username='$usr'");
    $sql->execute();
    
      echo ' <script> alert("your data has been updated");window.location.href = "logins.php"</script> ';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Account</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>UPDATE</h2>
  </div>
	 
  <form method="post" action="updata.php">
  	<?php include('errors.php'); ?>
    <h1><?php echo "welcome ".$_COOKIE['username'] ;?></h1>
  	<div class="input-group">
  		<label>NEW Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>NEW Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">UPDATE</button>
      
  	</div>
  	
  </form>
</body>
</html>

