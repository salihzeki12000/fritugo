<noscript>This website requires JavaScript to be fully functional. Please enable JavaScript in your browser!</noscript>
<?php
	if(isset($_SESSION['user_logged'])){
		$users = fetch_db('frtg_user','WHERE id = '.$_SESSION['user_logged']);
		foreach($users as $user){
			$username = $user['username'];
		}
	}
?>
<header id="header" class="navbar-static-top">
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
					<li class="menu-item-has-children">
						<a href="plan-create.php">Trip Plan</a>
						<ul>
							<li><a href="plan-create.php" class="uppercase">Create Trip Plan</a></li>
							<li><a href="plan-view.php" class="uppercase">Find Trip Plan</a></li>
						</ul>
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
					<?php
						if(isset($_SESSION['user_logged'])){
							echo '
								<li class="menu-item-has-children">
									<a href="dashboard.php">'.$username.'</a>
									<ul>
										<li><a href="plan-create.php">Account</a></li>
										<li><a href="function/actionLogout.php">Logout</a></li>
									</ul>
								</li>
							';
						}
						else{
							echo '
								<li class="menu-item">
									<a href="#travelo-login" class="soap-popupbox" id="fritugologin">LOG IN</a>
								</li>
								<li class="menu-item">
									<a href="#travelo-signup" class="soap-popupbox" id="fritugo-signup">SIGN UP</a>
								</li>
							';
						}
					?>
				</ul>
			</nav>
		</div>
		
		<nav id="mobile-menu-01" class="mobile-menu collapse">
			<ul id="mobile-primary-menu" class="menu">
				<li class="menu-item-has-children">
					<a href="plan-create.php">Trip Plan</a>
					<ul>
						<li><a href="plan-create.php" class="uppercase">Create Trip Plan</a></li>
						<li><a href="plan-view.php" class="uppercase">Find Trip Plan</a></li>
					</ul>
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
				<?php
					if(isset($_SESSION['user_logged'])){
						echo '
							<li class="menu-item">
								<a href="#travelo-login" class="soap-popupbox">'.$username.'</a>
							</li>
						';
					}
					else{
						echo '
							<li class="menu-item">
								<a href="#travelo-login" class="soap-popupbox" id="fritugo-login">LOG IN</a>
							</li>
							<li class="menu-item">
								<a href="#travelo-signup" class="soap-popupbox" id="fritugo-signup">SIGN UP</a>
							</li>
						';
					}
				?>
			</ul>
		</nav>
	</div>
	
	<!-- SIGN UP FORM -->
	<div id="travelo-signup" class="travelo-signup-box travelo-box">
		<div class="login-social">
			<a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
			<a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
		</div>
		<div class="seperator"><label>OR</label></div>
		<div class="login-social">
			<a href="#" class="button login-facebook signup-email" style="color:#ffffff;"><i class="soap-icon-message"></i>Sign up with Email</a>
		</div>
		<div class="simple-signup">
			<p class="description">By signing up, I agree to Fritugo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
		</div>
		<div class="email-signup">
			<?php
				if(isset($_SESSION['username_existed'])){
					echo '<div class="alert alert-error" id="warning-box">Username not available! <span class="close"></span></div>';
				}
				if(isset($_SESSION['email_existed'])){
					echo '<div class="alert alert-error" id="warning-box">Email already registered! <span class="close"></span></div>';
				}
				if(isset($_SESSION['register_unknown_error'])){
					echo '<div class="alert alert-error" id="warning-box">Something went wrong! Please try again! <span class="close"></span></div>';
				}
			?>
			<form method="POST" action="function/actionRegister.php">
				<div class="form-group">
					<input type="text" class="input-text full-width" placeholder="Username" id="register_username" name="register_username" required>
					<p>
						<img src="images/icon/loader.gif" id="loader" style="display:none" />
						<span id="user-availability-status" style="display:none;"></span>
					</p>
				</div>
				<div class="form-group">
					<input type="text" class="input-text full-width" placeholder="Email Address" id="register_email" name="register_email" required>
					<p>
						<span id="register-email-availability-status" style="display:none;"></span>
					</p>
				</div>
				<div class="form-group">
					<input type="password" class="input-text full-width" placeholder="Password" id="register_password" name="register_password" required>
					<p>
						<span id="register-password-availability" style="display:none;"></span>
					</p>
				</div>
				<div class="form-group">
					<input type="password" class="input-text full-width" placeholder="Confirm Password" id="register_confirm_password" name="register_confirm_password" required>
					<p>
						<span id="register-confirm-password" style="display:none;"></span>
					</p>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="newsletter" id="newsletter"> Tell me about Fritugo news
						</label>
					</div>
				</div>
				<div class="form-group">
					<p class="description">By signing up, I agree to Fritugo's Terms of Service and Privacy Policy.</p>
				</div>
				<button type="submit" class="full-width btn-medium" name="register" id="submit">SIGN UP</button>
			</form>
		</div>
		<div class="seperator"></div>
		<p>Already a Fritugo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
	</div>
	
	<!-- LOGIN FORM -->
	<div id="travelo-login" class="travelo-login-box travelo-box">
		<div class="login-social">
			<a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
			<a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
		</div>
		<div class="seperator"><label>OR</label></div>
		<form method="POST" action="function/actionLogin.php">
			<?php
				if(isset($_SESSION['fail_email_empty'])){
					echo '<div class="alert alert-error" id="warning-box">Please enter your email address! <span class="close"></span></div>';
				}
				if(isset($_SESSION['fail_password_empty'])){
					echo '<div class="alert alert-error" id="warning-box">Please enter your password! <span class="close"></span></div>';
				}
				if(isset($_SESSION['login_wrong_password'])){
					echo '<div class="alert alert-error" id="warning-box">Incorrect password! <span class="close"></span></div>';
				}
				if(isset($_SESSION['login_email_not_found'])){
					echo '<div class="alert alert-error" id="warning-box">Email not found! <span class="close"></span></div>';
				}
				if(isset($_SESSION['login_unknown_error'])){
					echo '<div class="alert alert-error" id="warning-box">Something went wrong! Please try again! <span class="close"></span></div>';
				}
			?>
			<div class="form-group">
				<input type="email" class="input-text full-width" placeholder="Email Address" name="login_email">
			</div>
			<div class="form-group">
				<input type="password" class="input-text full-width" placeholder="Password" name="login_password">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success full-width" value="Log in">
			</div>
			<div class="form-group">
				<a href="#" class="forgot-password pull-right">Forgot password?</a>
				<div class="checkbox checkbox-inline">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
			</div>
		</form>
		<div class="seperator"></div>
		<p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
	</div>
</header>