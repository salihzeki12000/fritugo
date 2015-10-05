<?php

    date_default_timezone_set('Asia/Jakarta');
    //error_reporting(0);
   	include('include/db.php');
    session_start();
    if(!isset($_SESSION["id"]))
    {
        $username = 'Guest';
        $sign = 'LOG IN';
        $items = '';
        $masuk = false;
    }
    else
    {
        $username = $_SESSION["username"];
        $cust_id = $_SESSION["id"];
        $sign = $username.' | LOG OUT';
        $masuk = true;
        //$flag = 2;
        //$string = "Select * from tbl_order WHERE User_id = ".$_SESSION["userid"]." AND Order_status = 'UNDELIVERED';";
       // $mysql->execute($string);
       // $items = $mysql->get_num_rows();
    }
/*
$session_uid=$_SESSION['uid'];
// Session Private
if(!empty($session_uid)) {
	$uid=$session_uid;
	$login='1';
	} else if($_GET['username']) {
		$uid=$Mat->User_ID($username);
		$login='0';
	} else {
	   $url=$base_url.'index.php';
	   header("location:$url");
}
*/
?>
