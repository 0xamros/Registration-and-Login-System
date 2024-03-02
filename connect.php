<?php

##############################
#    CREATED BY CLAW TEAM    #
#                            #
#      Beta version  2.0     #
##############################

?>

<?php error_reporting(0); ?>

<?php

$host = "sql208.epizy.com";
$dbusername = "epiz_27033288";
$dbpassword = "4RdH547YARujh7";
$dbname="epiz_27033288_users";
$options=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

$conn='mysql:host='.$host.';dbname='.$dbname;

try {
  $db = new PDO($conn, $dbusername, $dbpassword,$options);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
?> 