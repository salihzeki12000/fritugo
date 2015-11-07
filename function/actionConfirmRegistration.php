<?php
	session_start();
	
	include "../library/connect.php";
	include "../library/function.lib.php";
	
	if(!isset($_GET['email'])){
		header("location:../404.php");
		exit;
	}
	if(!isset($_GET['key'])){
		header("location:../404.php");
		exit;
	}
	
	$email = trim($mysqli->real_escape_string($_GET['email']));
	$key = trim($mysqli->real_escape_string($_GET['key']));
	
	$find = count_rows('frtg_user_temp','WHERE email = "'.$email.'" AND `key` = "'.$key.'"');
	if($find > 0){
		$copies = fetch_db('frtg_user_temp','WHERE email = "'.$email.'" AND `key` = "'.$key.'"');
		foreach($copies as $copy){
			$query = "INSERT INTO frtg_user (created,username,password,email,role,last_login,newsletter) VALUES (".$copy['created'].",'".$copy['username']."','".$copy['password']."','".$copy['email']."',".$copy['role'].",".$copy['last_login'].",".$copy['newsletter'].")";
			$result = $mysqli->query($query);
			
			if($result){
				delete_db('frtg_user_temp','email',$email);
				header("location:../static/successful.php?ref=user_confirmed");
				exit;
			}
			else{
				echo "error"; exit;
			}
		}
	}
	else{
		header("location:../static/unsuccessful.php?ref=user_confirmed");
		exit;
	}
?>