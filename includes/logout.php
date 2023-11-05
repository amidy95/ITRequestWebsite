<?php session_start(); // sett up session.?> 
<?php

//CANCELLING THE SESSIONS SETTING THE DATA TO NULL AND THEN REDIRECT TO 
$_SESSION['user_id']  = null;
$_SESSION['user_email']  = null;
$_SESSION['user_password']  = null;
$_SESSION['first_name']  = null;
$_SESSION['last_name']  = null;
$_SESSION['dob']  = null;
$_SESSION['city'] = null;
$_SESSION['state']  = null;
$_SESSION['zip_code']  = null;
$_SESSION['user_type']  = null;
header("Location: ../index.php");

?>
