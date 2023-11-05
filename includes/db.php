<?php
ob_start();
?>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'it_request_website');
if($connection){
  //  echo "We are connected";
}//1998-01-29

date_default_timezone_set('America/New_York');
?>
