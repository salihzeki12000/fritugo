<?php
	session_start();
	
	$_SESSION = "";
	
	require "connect.php";
	require "function.lib.php";
	
	if(!isset($_SERVER['HTTP_REFERER'])){
		header('location:../404.php');
		exit;
	}
	if(!isset($_POST['username'])){
		header('location:../404.php');
		exit;
	}
	
	if(!empty($_POST['username'])){
		$username = trim($mysqli->real_escape_string($_POST['username']));
	}
	else{
		setSession('fail_username_empty',1);
	}
	if(!empty($_POST['password'])){
		$password = trim($mysqli->real_escape_string($_POST['password']));
		$password = hash('SHA256',$password);
	}
	else{
		setSession('fail_password_empty',1);
	}
	
	$query = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
	$result = $mysqli->query($query);
	
	if($result->num_rows == 0){
		setSession('user_not_found',1);
	}
	else{
		while($row = $result->fetch_array(MYSQLI_BOTH)){
			$id = $row['id'];
			$role = $row['role'];
			$company_id = $row['company_id'];
		}
		
		$_SESSION['user_logged'] = $id;
		$_SESSION['user_role'] = $role;
		$_SESSION['user_company_id'] = $company_id;
		
		header('location:../index.php');
		exit;
	}
?>