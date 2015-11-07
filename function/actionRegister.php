<?php
	session_start();
	include "../library/connect.php";
	include "../library/function.lib.php";
	
	if(isset($_POST['register'])){
		if(!empty($_POST['register_username'])){
			$username = trim($mysqli->real_escape_string($_POST['register_username']));
		}
		if(!empty($_POST['register_email'])){
			$email = trim($mysqli->real_escape_string($_POST['register_email']));
		}
		if(!empty($_POST['register_password'])){
			$password = trim($mysqli->real_escape_string($_POST['register_password']));
		}
		if(!empty($_POST['register_confirm_password'])){
			$confirm_password = trim($mysqli->real_escape_string($_POST['register_confirm_password']));
		}
		if(isset($_POST['newsletter'])){
			$newsletter = 2;
		}
		else{
			$newsletter = 1;
		}
		
		$username_user_table = count_rows('frtg_user','WHERE username = "'.$username.'"');
		$username_temp_user_table = count_rows('frtg_user_temp','WHERE username = "'.$username.'"');
		$email_user_table = count_rows('frtg_user','WHERE email = "'.$email.'"');
		$email_temp_user_table = count_rows('frtg_user_temp','WHERE email = "'.$email.'"');
		
		if($password != $confirm_password){
			header("location:../index.php?ref=register");
			exit;
		}
		else if($username_user_table > 0 || $username_temp_user_table > 0){
			// Simulate click on login in previous page and show warning
			setSession('username_existed',1);
		}
		else if($email_user_table > 0 || $email_temp_user_table > 0){
			// Simulate click on login in previous page and show warning
			setSession('email_existed',1);
		}
		else{
			$options = ['cost' => 9,];
			$password = password_hash($password, PASSWORD_BCRYPT, $options);
			$key = md5(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
			$created = strtotime("now");
			
			$query = "INSERT INTO frtg_user_temp (created,username,`password`,email,role,last_login,newsletter,`key`) VALUES (".$created.",'".$username."','".$password."','".$email."',1,".$created.",".$newsletter.",'".$key."')";
			$result = $mysqli->query($query);
			
			if($result){
				// Send email to user to confirm their email address //
				echo "success"; exit;
			}
			else{
				// Simulate click on login in previous page and show warning
				setSession('register_unknown_error',1);
			}
		}
	}
	else{
		header("location:../404.php");
		exit;
	}
?>