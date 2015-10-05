<?php 
include 'include/db.php';
include 'include/User.php';
session_start();

// Logout the user from the session
if (isset($_SESSION['uid'])) {
  $User = new User();
  $User->LogoutCookie($_SESSION['uid']);
}

session_destroy();

// You must unset the session values!
// Just using session_destroy() is not enough.
$_SESSION = array();
$_REQUEST['username']="";

header('Location: index.php');
?>


