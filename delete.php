<?php include('connect.php')?>
<?php
$usr=$_COOKIE['username'];
	 if (!isset($_COOKIE['username'])) {
     echo ' <script> alert("session timeout");window.location.href = "logins.php"</script> ';
      //die();
    }
 ?>

<?php
$sql=$db->prepare("delete from users where username='$usr'");
$sql->execute();
echo ' <script> alert("your data has been deleted");window.location.href = "logins.php"</script> ';
?>
