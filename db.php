<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ahmadbut_2');  // Your database Username
define('DB_PASSWORD', 'ahmad123'); // Your database Password
define('DB_DATABASE', 'ahmadbut_2'); // Your database Name   
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");  
$path = "uploads/";
$LogoPaht="css/icons/";
$conversation_uploads = "conversation_images/";
$profile_image_path = "user_profile_uploads/";
$admin_path = "../".$LogoPaht;
$admin_profile_path='../'.$profile_image_path;
$admin_path_uploads='../'.$path;
$profile_cover_pic_path = "user_profile_cover_uploads/"; // User Profile Cover File
$perpage=10; // Updates perpage
$base_url='http://www.twittca.com/'; // base_url
$admin_base_url=$base_url.'smadmin/'; // Admin base_url
$gravatar=0; // 0 false 1 true gravatar image
$rowsPerPage=1000000; //friends list
$profilePerPage=3;

/*SMTP Details */
$smtpUsername='yourname@gmail.com'; //yourname@gmail.com
$smtpPassword='gmail password';  //gmail password
$smtpHost='tls://smtp.gmail.com'; //tls://smtp.gmail.com
$smtpPort='465'; //465
$smtpFrom='yourname@gmail.com'; //yourname@gmail.com
?>