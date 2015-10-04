<?php
ob_start("ob_gzhandler");
error_reporting(0);
error_reporting(E_ALL  & ~E_DEPRECATED);
ini_set('display_errors', -1);
include_once 'includes/Mat_Updates.php';
$Mat = new Mat_Updates();
include_once 'includes/db.php';
include_once 'includes/User.php';
session_start();
$session_uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : NULL; 
if (empty($session_uid)) {
   // Check for cookie
  if (isset($_COOKIE['token'])) {
    $session_uid = $User->check_remember($_COOKIE['token']);
  }
}
if(!empty($session_uid)) {
	header("location:dashboard.php");
}
$User = new User();
//Login
$login_error='';
$login_error_div='';
if(!empty($_POST['user']) && !empty($_POST['passcode'])) {
	$username=$_POST['user'];
	$password=$_POST['passcode'];
	if(strlen($username)>0 && strlen($password)>0) {
		$login=$User->User_Login($username, $password);
		if($login) {
			$User->Check_Banned($_SESSION['uid']);
			$_SESSION['uid']=$login;
			header("Location:dashboard.php");
		} else {
			$login_error="Wrong username or password!";
			$login_error_div="error";
		}
	}
}
//Registration
$reg_error='';
$reg_error_div='';
if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$name = $_POST['name'];
	$full_check = preg_match('~^[A-Za-z0-9_. ]{3,50}$~i', $name);
	if(strlen($username)>0 && strlen($password)>0 && strlen($email) && strlen($name)) {
		$reg=$User->User_Registration($username, $password, $email, $name);
		if($reg) {
			$_SESSION['uid']=$reg;
			header("Location:dashboard.php");
		} else {
			$reg_error="This username is already exist.";
			$reg_error_div="error";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Fritugo | Login</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<link rel="shortcut icon" href="css/icons/minilogo.png">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/login.js" type="text/javascript"></script>  
<script src="js/loginsignup.js" type="text/javascript"></script> 
<script src="js/md.js"></script>
<script type="text/javascript">
$(window).load(function() {
 $('.preloader').addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
 $('.preloader').hide();
});
$(".typed").typewriter({
   speed: 60
});	
});
</script>

</head>

<body>
<div class="preloader"><img src="css/icons/loader.gif" alt="Preloader image"></div>			
<div id="large-header" class="large-header">
<canvas id="demo-canvas"></canvas>
</div>
		
<div class="global-main-container">
<div class="site_logo"><span class="helper"></span><img src="css/icons/mainLogo.png" /></div><br>
<div class="tyy">
 <div class="white typed">Share your amazing trip with your friends..</div><div class="typed-cursor">|</div>
 </div>
<form method="post" action="" name="login" >
  <div class="login">
   
    <div class="input-global">
      <input style="display:none">
      <input type="text" id="ssr" name="user" class="input-style background-account" placeholder="Username or Email">
       <span class="bar"></span>
    </div>
    <div class="input-global">
      <input name="passcode" style="display:none">
      <input type="password" id="ssr" name="passcode" class="input-style background-pass" placeholder="Password">
      <span class="bar"></span>
    </div>
    <div class="input-global_remember"><input type="checkbox" name="remember" id="rememberl" class="rememberme"><label for="rememberl" class="remlab">Remember me</label></div>
    <div class="registerError <?php echo $login_error_div;?>"><?php echo $login_error; ?></div>
    <div class="input-global">
    <div class="test">
    <div class="MaterialTouch md-ripple">
      <input type="submit" value="Login" class="login_btn background-login" />
      </div>
      </div>
    </div>
    
    <div class="input-global">
      <div class="link_btn left sign_up">REGISTER</div>
      <div class="link_btn right"><a href="forgot.php">FORGOT PASSWORD</a></div>
    </div>
  </div>
  </form>
</div>
<div class="sidebar">
    <div class="sidebar-content">
    <div class="global-main-container">
    <div class="site_logo"><span class="helper"></span><img src="css/icons/mainLogo.png" /></div>
 <form method="post" action="" name="reg" id="signup">
  <div class="login">
    <div class="input-global">
      <input style="display:none">
      <input type="text" name="username" id="username" class="input-style background-account" placeholder="Username">
       <span class="bar"></span>
    </div>
    <div class="input-global">
      <input type="text" name="name" id="name" class="input-style background-account" placeholder="Name surname">
       <span class="bar"></span>
    </div>
    <div class="input-global">
     
      <input type="text" name="email" id="email" class="input-style background-email" placeholder="Email">
       <span class="bar"></span>
    </div>
    <div class="input-global">
      
      <input type="password" name="password" id="password" class="input-style background-pass2" placeholder="Password">
      <span class="bar"></span>
    </div>
    <div class="registerError" id="estatus"><?php echo $login_error; ?></div>
        <div class="registerError" id="status"><?php echo $login_error; ?></div>
    <div class="input-global">
    <div class="test">
    <div class="MaterialTouch md-ripple">
      <input type="submit" value="Register" class="login_btn background-login" />
      </div>
      </div>
    </div>
    <div class="input-global">
      <div class="link_btn left sign_in">LOGIN</div>
    </div>
  </div>
  </form>
</div>
    </div>
</div>
<div class="footer"><div class="footer_in"><!--About Area--></div></div>
<script src="js/typewriter.js"></script>
<script src="js/bubble.js" type="text/javascript"></script>  
<script src="js/rAF.js" type="text/javascript"></script>  
</body>
</html>