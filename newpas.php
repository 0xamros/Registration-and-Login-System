
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleold1.css">
    <title>Document</title>
</head>
<body>
	<form method="post" action="pas.php" class="form">

	<?php
	/*if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
}else{
  echo ' <script> alert("cannot go there");window.location.href = "pas.php"</script> ';
}*/
	//session_start();
	include('connect.php');
if (!isset($_COOKIE['keyy'])) {
      echo ' <script> alert("session timeout");window.location.href = "pas.php"</script> ';
      die();
    }else{
      
    }

	/*if (!isset($_SESSION['keyy'])) {
echo ' <script> alert("key is not valid");window.location.href = "pas.php"</script> ';

    //$_SESSION['successed'] = "key is valid";
    
    //header('location: logins.php');
    //echo ($_SESSION['keyy']);
    }else{
    unset($_SESSION['keyy']);
   
    }*/
    //echo "#CREATED BY CLAW TEAM#"."<br>"."#Beta version  2.0#";
	$x=random_bytes(25);
	$y=bin2hex($x);
		
	$query =$db->prepare ("INSERT INTO kss (kss) 
  			  VALUES('$y')");
  	$query->execute();
  	?>
  	<div class="input-group">
  	<p0>
    <?php echo "key="."<br>".($y)."<br>"; ?>
		  
  </p0>
  	 <input type="submit" value="get key" class="btn" id="btnHome" onClick="Javascript:window.location.href = 'pas.php';" />
  	 </div>
  	 </form>
  	 </body>
</html>