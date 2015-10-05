<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');  // Your database Username : webagedv_shop
define('DB_PASSWORD', ''); // Your database Password : cP1([6S3FO
define('DB_DATABASE', 'fritugo'); // Your database Name   : webagedv_socialmat
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
$base_url='http://www.fritugo.webagedev.com/'; // base_url
$admin_base_url=$base_url.'smadmin/'; // Admin base_url
$gravatar=0; // 0 false 1 true gravatar image
$rowsPerPage=1000000; //friends list
$profilePerPage=3;

/*SMTP Details */
$smtpUsername='yourname@gmail.com'; //yourname@gmail.com or you can use your webmail like somename@yourwebsitename.com
$smtpPassword='pass';  //gmail password or your webmail password
$smtpHost='ssl://mail.yourwebsitename.com'; //tls://smtp.gmail.com if yo
$smtpPort='465'; //465
$smtpFrom='yourname@gmail.com'; //yourname@gmail.com
?>