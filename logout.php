<?php
setcookie('username',$usercount,time()-1000,"/");
header("location:logins.php");
?>