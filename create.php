<?php include('connect.php')?>
<?php
$username = filter_var($_GET['username'],FILTER_SANITIZE_STRING);
 $email = filter_var($_GET['email'],FILTER_VALIDATE_EMAIL);
 $password = filter_var($_GET['password'], FILTER_SANITIZE_STRING);
$tmp=$_COOKIE['username'];
//echo $tmp;
	 if (!isset($_COOKIE['username'])) {
     echo ' <script> alert("session timeout");window.location.href = "logins.php"</script> ';
      //die();
    }else{
$query = $db->prepare("INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')");
    $query->execute();

echo ('<script>alert("your account has been created thanks for visit our website now login to your account");window.location.href="logins.php"</script>');
}