<?php

require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_REQUEST["username"])) {
  $username = $_REQUEST['username'];
  $result = mysql_query("SELECT count(*) FROM frtg_user WHERE username='$username';");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  echo $username;
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span><script>$('#submit').prop('disabled', true);</script>";
  }else{
      echo "<span class='status-available'> Username Available.</span><script>$('#submit').prop('disabled', false);</script>";
  }
}
?>