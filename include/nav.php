<?php
	include('session.php');
?>
<header id="header" class="navbar-static-top">
	<title>Fritugo | Your Perfect Plan for Your Perfect Trip</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Fritugo">
    <meta name="author" content="SoapTheme">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
	<div class="main-header">
		
		<a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
			Mobile Menu Toggle
		</a>

		<div class="container">
			<h1 class="logo navbar-brand">
				<a href="index.php" title="Fritugo - home">
					<img src="images/logo.png" alt="Fritugo" />
				</a>
			</h1>
			
			<nav id="main-menu" role="navigation">
				<ul class="menu">
					<li class="menu-item">
						<a href="#">Trip Plan</a>
					</li>
					<li class="menu-item">
						<a href="explore.php">Explore</a>
					</li>
					<li class="menu-item">
						<a href="destinations.php">Destinations</a>
					</li>
					<li class="menu-item">
						<a href="hotels.php">Hotels</a>
					</li>
					<li class="menu-item">
						<a style="font-size:20pt; font-weight:100;">|</a>
					</li>
					<li class="menu-item">
						<?php
							if($masuk == false)
							{
							echo "<a href='#travelo-login' class='soap-popupbox'><i class='soap-icon-settings'></i> ".$sign."</a>";
							echo "</li>";
							echo "<li class='menu-item'>";
							echo "<a href='#travelo-signup' class='soap-popupbox'><i class='soap-icon-key'></i> SIGN UP</a>";
							echo "</li>";
							}
							else 

							echo "<a href='logout.php'><i class='soap-icon-settings'></i> ".$sign."</a>";
						?>
					
				</ul>
			</nav>
		</div>
		
		<nav id="mobile-menu-01" class="mobile-menu collapse">
			<ul id="mobile-primary-menu" class="menu">
				<li class="menu-item">
					<a href="#">Trip Plan</a>
				</li>
				<li class="menu-item">
					<a href="explore.php">Explore</a>
				</li>
				<li class="menu-item">
					<a href="destinations.php">Destinations</a>
				</li>
				<li class="menu-item">
					<a href="hotels.php">Hotels</a>
				</li>
				<li class="menu-item">
					<a href="#travelo-login" class="soap-popupbox">LOGIN</a>
				</li>
				<li class="menu-item">
					<a href="#travelo-signup" class="soap-popupbox">SIGNUP</a>
				</li>
			</ul>
			<!--
			<ul class="mobile-topnav container">
				<li><a href="#">MY ACCOUNT</a></li>
				<li class="ribbon language menu-color-skin">
					<a href="#" data-toggle="collapse">INDONESIA</a>
					<ul class="menu mini">
						<li class="active"><a href="#" title="Indonesia">Indonesia</a></li>
						<li><a href="#" title="English">English</a></li>
					</ul>
				</li>
				<li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
				<li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
				<li class="ribbon currency menu-color-skin">
					<a href="#">USD</a>
					<ul class="menu mini">
						<li><a href="#" title="AUD">AUD</a></li>
						<li><a href="#" title="BRL">BRL</a></li>
						<li class="active"><a href="#" title="USD">USD</a></li>
						<li><a href="#" title="CAD">CAD</a></li>
						<li><a href="#" title="CHF">CHF</a></li>
						<li><a href="#" title="CNY">CNY</a></li>
						<li><a href="#" title="CZK">CZK</a></li>
						<li><a href="#" title="DKK">DKK</a></li>
						<li><a href="#" title="EUR">EUR</a></li>
						<li><a href="#" title="GBP">GBP</a></li>
						<li><a href="#" title="HKD">HKD</a></li>
						<li><a href="#" title="HUF">HUF</a></li>
						<li><a href="#" title="IDR">IDR</a></li>
					</ul>
				</li>
			</ul>
			-->
		</nav>
	</div>
	<!--
	<div class="topnav hidden-xs">
		<div class="container">
			<ul class="quick-menu pull-left">
				<li><a href="#">MY ACCOUNT</a></li>
				<li class="ribbon">
					<a href="#">Indonesia</a>
					<ul class="menu mini">
						<li class="active"><a href="#" title="Indonesia">Indonesia</a></li>
						<li><a href="#" title="English">English</a></li>
					</ul>
				</li>
			</ul>
			<ul class="quick-menu pull-right">
				<li><a href="#travelo-login" class="soap-popupbox">Login</a></li>
				<li><a href="#travelo-signup" class="soap-popupbox">Sign Up</a></li>
				<li class="ribbon currency">
					<a href="#" title="">IDR</a>
					<ul class="menu mini">
						<li class="active"><a href="#" title="IDR">IDR</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	-->

	<div id="travelo-signup" class="travelo-signup-box travelo-box">
		<div class="login-social">
			<a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
			<a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
		</div>
		<div class="seperator"><label>OR</label></div>
		<div class="simple-signup">
			<div class="text-center signup-email-section">
				<a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
			</div>
			<p class="description">By signing up, I agree to Fritugo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
		</div>
		<div class="email-signup">
			<form role="form" name="register_form" id="register_form" action="register_kueri.php" method="POST">
				<style>
				.status-available{color:#2FC332;}
				.status-not-available{color:#D60202;}
				</style>
				
				<div class="form-group">
				  <input name="username" type="text" id="username" class="input-text full-width" placeholder = "Username" onBlur="checkAvailability()"><span id="user-availability-status"></span>    
				</div>
				<p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
				
				
				<script>
				function checkAvailability() {
					
					$("#loaderIcon").show();
					jQuery.ajax({
					url: "check_availability.php",
					data:'username='+$("#username").val(),
					type: "POST",
					success:function(data){
						$("#user-availability-status").html(data);
						$("#loaderIcon").hide();
					},
					error:function (){}
					});
				}
				</script>

				<div class="form-group">
					<input type="email" name="email" id="email" class="input-text full-width" placeholder="email address" value="" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="input-text full-width" placeholder="password" value="" required>
				</div>
				<div class="form-group">
					<input type="password" name="confirmpassword" id="confirmpassword" class="input-text full-width" placeholder="confirm password" value="" required>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Tell me about Fritugo news
						</label>
					</div>
				</div>
				<div class="form-group">
					<p class="description">By signing up, I agree to Fritugo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
				</div>
				<button type="submit" name="submit" id="submit" value="" class="full-width btn-medium">SIGNUP</button>
			</form>
		</div>
		
		<div class="seperator"></div>
		<p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
	</div>
	<div id="travelo-login" class="travelo-login-box travelo-box">
		<div class="login-social">
			<a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
			<a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
		</div>
		<div class="seperator"><label>OR</label></div>
		<form action="login_auth.php" method="POST">
			<div class="form-group">
				<input type="text" class="input-text full-width" id="username_login" name="username_login" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="input-text full-width" id="password" name="password" placeholder="password" required>
			</div>
			<div class="form-group">
				<a href="#" class="forgot-password pull-right">Forgot password?</a>
				<div class="checkbox checkbox-inline">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
			</div>
			<div>
				<button type="submit">Log in</button>
			</div>
		</form>
		<div class="seperator"></div>
		<p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
	</div>
</header>
