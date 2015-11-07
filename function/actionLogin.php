<?php
	session_start();
	
	require "../library/connect.php";
	require "../library/function.lib.php";
	
	if(!isset($_SERVER['HTTP_REFERER'])){
		header('location:../404.php');
		exit;
	}
	if(!isset($_POST['login_email'])){
		header('location:../404.php');
		exit;
	}
	
	if(!empty($_POST['login_email'])){
		$email = trim($mysqli->real_escape_string($_POST['login_email']));
	}
	else{
		// Simulate click on login in previous page and show warning
		setSession('fail_email_empty',1);
	}
	if(!empty($_POST['login_password'])){
		$password = $_POST['login_password'];
	}
	else{
		setSession('fail_password_empty',1);
	}
	
	$check_email = fetch_db('frtg_user','WHERE email = "'.$email.'"');
	if(!empty($check_email)){
		foreach($check_email as $user){
			$password_db = $user['password'];
			if(password_verify($password, $password_db)){
				$last_login = strtotime("now");
				$query = "UPDATE frtg_user SET last_login = ".$last_login." WHERE email = '".$email."'";
				$result = $mysqli->query($query);
				if($result){
					$_SESSION['user_logged'] = $user['id'];
					$_SESSION['user_role'] = $user['role'];
				
					header("location:".$_SERVER['HTTP_REFERER']);
					exit;
				}
				else{
					setSession('login_unknown_error',1);
				}
			}
			else{
				// Simulate click on login in previous page and show warning
				setSession('login_wrong_password',1);
			}
		}
	}
	else{
		// Simulate click on login in previous page and show warning
		setSession('login_email_not_found',1);
	}
?>