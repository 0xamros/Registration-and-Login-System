<!DOCTYPE html>

<html lang="ar">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styleold1.css">

     <script src="https://www.google.com/recaptcha/api.js"></script>

    <title>Document</title>

</head>

<body>



    <!----------------------Font Family-------------------->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">

<!-------------------------------------------------------->



<!------------div-Login---------->

<div class='form'>



  <h2>KEY</h2>



  <!----user name------------->

  <form action="capa.php" method="post">

    <div><?php

//session_start();

      $ky=random_bytes(5);

      setcookie('keyy',$ky,time()+(10),"/");

      $_COOKIE['keyy']=$ky;

    //$_SESSION['keyy'] = $ks;

    //$_SESSION['successed'] = "key is valid";

    //---------------------------------

    if (!isset($_COOKIE['username'])) {

      echo ' <script> alert("session timeout");window.location.href = "logins.php"</script> ';

      //die();

    } else {



    }

    //---------------------------------



/*if (!isset($_SESSION['username']) ) {



    $_SESSION['msg'] = "You must log in first";

    echo ' <script> alert("You must log in first");window.location.href = "logins.php"</script> ';

    exit;

    //header('location: logins.php');

    echo ($_SESSION['username']);

    }else{// inactive in seconds

$inactive = 1000;

if( !isset($_SESSION['timeout']) )

$_SESSION['timeout'] = time() + $inactive; 



$session_life = time() - $_SESSION['timeout'];



if($session_life > $inactive)

{  session_destroy(); 

    echo ' <script> alert("session timeout");window.location.href = "logins.php"</script> ';

     }



$_SESSION['timeout']=time();

    }*/



//$ky=random_bytes(5);

//$cookie_key=md5($ky);

//$cookie_keyvalue="key";

//setcookie($cookie_key,$cookie_keyvalue,time()+(15),"/");

//$_SESSION['ky'] = $ky;

 /*if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

  

  

}else{

  echo ' <script> alert("cannot go there");window.location.href = "logins.php"</script> ';

}

*/

?>

</div>

<div class="input-group">

  <label>Generating Random Key</label>

  <input name='key' placeholder='key' type='text' class="input-group">

  

  

  <div class="g-recaptcha" data-sitekey="6LdwsOMZAAAAAIO5V-pK4lIdAH-ExAPlqw1q_6In"></div> <br>

  <!--------Login------->

  <input  type='submit' name= "login" value='Login' class="btn"><br>

  <input type="button" value="get key" class="btn" id="btnHome" onClick="Javascript:window.location.href = 'newpas.php';" />

<br><br>

  <label>

    <p>by claw team new members &copy;</p>

  </label>

  </div>

</div>

</body>

</html>



