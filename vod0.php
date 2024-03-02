

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>END</title>
      <link rel="stylesheet" href="styleold.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
 <!----------------------Font Family-------------------->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&display=swap" rel="stylesheet">
<!-------------------------------------------------------->
<?php

if ($_SERVER['REQUEST_METHOD']== 'POST') {
  $num=$_POST['number'];
  $pas=$_POST['pwd'];
  if (isset($_POST['number'])){
    $url="https://mobile.vodafone.com.eg/mobile-app/promo/unifiedRedeemPromo";
    $url2="https://mobile.vodafone.com.eg/mobile-app/auth";
    $data='{"channelId":3,"contextualOperationId":0,"contextualPromoId":0,"operationId":0,"param1":"football","promoId":3336,"triggerId":332,"triggerType":"6","wlistId":3256}';
    $user_pwd=$num.":".$pas;
    
    function post($url , $user_pwd) {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
      $response =curl_exec($ch);
      return $response;}

    function promo($url ,$post,$user_pwd) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $user_pwd);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8") );
        $response =curl_exec($ch);
          return $response;
        }

    $bot = json_decode(post($url2, $user_pwd), true);

    @$user=$bot["user"]["firstName"];
    @$eDesc=$bot["eDesc"];

    if ($eDesc=="Success") {
    echo ' <script> alert("Welcome , login Success ")</script> ';
    $bot2 = json_decode(promo($url, $data, $user_pwd), true);
    $eDesc2=@$bot2["eDesc"];
    if ($eDesc2=="MAX_PROMO_REDEMPTIONS_REACHED") {
      echo ' <script> alert("You Already Enjoying The Primo Code")</script> ';  
      header("Refresh:3; url=index0.php");
      exit;
    }else{
     echo ' <script> alert("200 MB has been added to your account");window.location.href = "index0.php"</script> '; 
     exit;
    }
  }else{

        echo ' <script> alert("الرقم او الباسورد غلط");window.location.href = "pas.php"</script> ';
        exit;
    }
  }
} else {
  echo " You Can't Access This Page Directly";
  header("Refresh: 3;URL=capa.php");
  exit;
}?>
<footer>
    <p>by claw team new members &copy;</p>
  </footer>
</div>
</body>
</html>