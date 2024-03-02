<?php

include('connect.php');

// initializing variables

$username = "";

$email    = "";

$errors = array(); 



// REGISTER USER

if (isset($_POST['reg_user'])) {

  // receive all input values from the form

  $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);

  $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

  $password_1 = filter_var($_POST['password_1'], FILTER_SANITIZE_STRING);

  $password_2 = filter_var($_POST['password_2'], FILTER_SANITIZE_STRING);



  // form validation: ensure that the form is correctly filled ...

  // by adding (array_push()) corresponding error unto $errors array

  if (empty($username)) { array_push($errors, "Username is required"); }

  if (empty($email)) { array_push($errors, "Email is required"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {

	array_push($errors, "The two passwords do not match");

  }

  $user = $db->prepare("SELECT count(*) as count ,username,email FROM users WHERE username='$username' OR email='$email' LIMIT 1");

  $user->execute();

  while ($row = $user->fetch(PDO::FETCH_ASSOC)) {



    $counter = $row['count'];

    $usercount = $row['username'];

    $emailcount = $row['email'];

    }

  if ($counter) { // if user exists

    if ($usercount === $username) {

      array_push($errors, "Username already exists");

    }



    if ($emailcount === $email) {

      array_push($errors, "email already exists");

    }

  }



  // Finally, register user if there are no errors in the form

  if (count($errors) == 0) {

  	$password = md5($password_1);//encrypt the password before saving in the database

    //-----------------------------------------------------------------------------------



$url = 'https://api.elasticemail.com/v2/email/send';

$url1 = 'https://amrosy.rf.gd/create.php?email='.$email.'&username='.$username.'&password='.$password;

try{

        $post = array('from' => 'amrhassan55555@gmail.com',

    'fromName' => 'ClawTeam',

    'apikey' => 'E60CA82A80FA3B71801ABBBC4A32C16D23D86D3F7822E4C5B3623B344FBBCEA7A9A78B3BBEC023EC29E484F5F427B593',

    'subject' => 'claw website create account',

    'to' => $email,

    'bodyHtml' => "<html>

<head>

  <title>confirm your account</title>

</head>



<body>

  <h1><a href='$url1'>click here</a></h1>

  <p>Hi there thanks for sign up in our website click above link or select and go to  $url1  to create your account ,this link is valid for 30 minute</p>

</body>



</html>

",

    'bodyText' => 'welcome',

    'isTransactional' => false);

    

    $ch = curl_init();

    curl_setopt_array($ch, array(

            CURLOPT_URL => $url,

      CURLOPT_POST => true,

      CURLOPT_POSTFIELDS => $post,

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_HEADER => false,

      CURLOPT_SSL_VERIFYPEER => false

        ));

    

        $result=curl_exec ($ch);

        curl_close ($ch);

    

        //echo $result; 

        $usercnt=random_bytes(5);

      setcookie('username',$usercnt,time()+(1900),"/");

      $_COOKIE['username']=$usercnt;    



      echo ' <script> alert("thank you , please ,check your email inbox or spam folder to create acount");window.location.href = "logins.php"</script> ';

      exit;

}

catch(Exception $ex){

  echo $ex->getMessage();

}



    //----------------------------------------------------------------------------------

    /*$url = 'https://دومينك/create.php?email='.$email.'&username='.$username.'&password='.$password;

  mail($email, 'claw website create account', 'Hi there thanks for sign up in our website goto this link '.$url. ' to create your account ,this link is valid for 30 minute', 'From: ClawWebsites@claw.com' . "\r\n");*/

  

    //-----------------

      

  	

  }

}





if (isset($_POST['login_user'])) {

  $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);

  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);



  if (empty($username)) {

    array_push($errors, "Username is required");

  }

  if (empty($password)) {

    array_push($errors, "Password is required");

  }



  if (count($errors) == 0) {

    $password = md5($password);

    $query =$db->prepare("SELECT count(*)as count,username FROM users WHERE username='$username' AND password='$password'");

    $query->execute();



      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {



    $counter = $row['count'];

    $usercount = $row['username'];

    }



    if ($counter >= 1) {

      

      //---------------------------------------

      setcookie('username',$usercount,time()+(86400 * 30),"/");

      $_COOKIE['username']=$usercount;

      

      //----------------------------------------

      $message="success, Going to dashboard";

     echo ' <script> alert("' . $message . '");window.location.href = "index.php"</script> ';

    }else {

      array_push($errors, "Wrong username/password  

        الباسورد غلط ");

    }

  }

}



?>

