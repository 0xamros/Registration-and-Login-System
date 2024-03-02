<?php

if (!isset($_COOKIE['username'])) {

      echo ' <script> alert("session timeout cookies");window.location.href = "logins.php"</script> ';}

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome To Dashboard</title>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<style>

body {

  font-family: 'Roboto Condensed', arial, sans-serif;

  margin: 0;

  background-color: #f3e9e9;

}



h2 {

  text-align: center;

  font-size: 50px;

}



/* -- main content -- */

.content-container {

  position: relative;

  z-index: 0;

  padding: 20px;

  max-width: 728px;

  margin: 0 auto;

  overflow: hidden;

  transition: all 300ms ease-in-out;

}



.site-title {

  text-align: center;

  border-bottom: 1px solid #111111;

  margin-bottom: 24px;

}



.site-title h1 {

  font-weight: 300;

  text-transform: uppercase;

  letter-spacing: 10px;

}



img {

  width: 100%;

}

.block {
    background-image: url(img/voda.png);
    background-size: contain;
  width: 200px;
  height: 200px;
  border: 1px solid black;
  display: inline-flex;
  justify-content: center;
  
  margin: 10px;
}

.content p {

  line-height: 1.6em;

  margin-bottom: 24px;

}
.content0 h5 {
text-align: center;
  line-height: 1.6em;

  margin-bottom: 24px;

}



/* -- Slideout Sidebar -- */



.slideout-sidebar {

  position: fixed;

  top: 0;

  left: -190px;

  z-index: 0;

  width: 150px;

  height: 100%;

  padding: 20px;

  background-color: #212121;

  transition: all 300ms ease-in-out;

}



.slideout-sidebar ul {

  list-style: none;

  margin: 0;

  padding: 0;

}



.slideout-sidebar ul li {

  cursor: pointer;

  padding: 18px 0;

  border-bottom: 1px solid rgba(244,244,244,0.4);

  color: rgba(244,244,244,0.7);

}

.slideout-sidebar ul li a {

  text-decoration: none;

  cursor: pointer;

  padding: 18px 0;

  border-bottom: 1px solid rgba(244,244,244,0.4);

  color: rgba(244,244,244,0.7);

}



.slideout-sidebar ul li:last-child {

  border-bottom: 0;

}



.slideout-sidebar ul li:hover {

  color: rgba(244,244,244,1);

}



/* -- Menu Icon -- */



#menu-toggle {

  display: none;

}



.menu-icon {

  position: absolute;

  top: 18px;

  left: 30px;

  font-size: 24px;

  z-index: 1;

  transition: all 300ms ease-in-out;

}







/*-- The Magic --*/

#menu-toggle:checked ~ .slideout-sidebar {

  left: 0px;

}



#menu-toggle:checked + .menu-icon {

  left: 210px;

}



#menu-toggle:checked ~ .content-container {

  padding-left: 190px;

}



/* -- Media Queries -- */



@media (max-width: 991px) {

  

  .content-container {

    max-width: 480px;

  }

  

}



@media (max-width: 767px) {

  

  .content-container {

    max-width: 100%;

    margin: 30px auto 0;

  }

  

  #menu-toggle:checked ~ .content-container {

    padding-left: 0;

  }

  

  .slideout-sidebar ul {

    text-align: center;

    max-width: 200px;

    margin: 30px auto 0;

  }

  

  .menu-icon {

    left: 20px

  }

  

  #menu-toggle:checked ~ .slideout-sidebar {

    width: 100%;

  }

  

  #menu-toggle:checked + .menu-icon {

    left: 87%;

    color: #fafafa;

  }

  

  @media screen  

    and (max-width: 736px) 

    and (orientation: landscape) {

      

      .slideout-sidebar {

        padding: 0;

      }

      

      .slideout-sidebar ul {

        max-width: 100%;

        margin: 60px auto 0;

      }

      

      .slideout-sidebar ul li {

        display: inline-block;

        border-bottom: 0;

        width: 72px;

        padding: 18px 24px;

        margin: 0 6px 12px;

        color: #ffffff;

        background-color: #777;

      }



  }

  

}

</style>

</head>



<body>

<input type="checkbox" id="menu-toggle" />

<label for="menu-toggle" class="menu-icon"><i class="fa fa-bars" style="
    position: fixed;"></i></label>

<div class="content-container">

  <div class="site-title">

    <h1>Claw Team Dashboard</h1>

  </div>

  <div class="css-script-ads" style="margin:30px auto;">

</div>

  <div class="content">

 

    <p><h2>Claw Website</h2></p>

  </div>
    <div class="content0">
<h5>By Amr</h5>

<div onclick="location.href='pas.php';" class="block">

    <a href="pas.php"> Voda 200mb</a>
    
</div>
  <div class="block">comming soon</div>
  <div class="block">comming soon</div>
  <div class="block">comming soon</div>
    

  </div>

</div>

<div class="slideout-sidebar">

  <ul>

    <h3 style="color: white;font-size: medium;"  >Account manager<br> <?php echo"Welcome <br>".($_COOKIE['username']); ?></h3>

    <li><i class="fa fa-shield"></i><a href="updata.php"> Update account data</a></li>

    <li><i class="fa fa-ban"></i><a href="delete.php"> Delete account</a></li>

    <li><i class="fa fa-user" ></i><a href="logout.php"> Logout</a> </li>

    <h3 style="color: white;">Scripts</h3>

    <li><i class="fa fa-code"></i><a href="pas.php"> Voda 200mb</a></li>

    <li><i class="fa fa-code"></i> Voda 400mb</li>

    <li><i class="fa fa-code"></i> Code luck</li>

    <h3 style="color: white;">Connact us</h3>

    <li><i class="fa fa-facebook"></i> Facebook</li>

    <li><i class="fa fa-youtube"></i><a href="https://www.youtube.com/channel/UCZt75nTyuNRkGTnntugs4rQ"> Youtube</a> </li>

    <li><i class="fa fa-envelope"></i><a href="mailto:amrhassan55555@gmail.com"> Email</a></li>

  </ul>

</div>

</body>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-46156385-1', 'cssscript.com');

  ga('send', 'pageview');



</script>

</html>

