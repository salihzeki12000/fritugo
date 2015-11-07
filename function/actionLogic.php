<?php
	session_start();
	
	require "../library/connect.php";
	include "../library/function.lib.php";
	
	if(isset($_GET['mod'])){
		$mod = trim($mysqli->real_escape_string($_GET['mod']));
		if(isset($_GET['act'])){
			$act = trim($mysqli->real_escape_string($_GET['act']));
		}
		else{
			header("location:../404.php");
			exit;
		}
	}
	else{
		header("location:../404.php");
		exit;
	}
	
	if(isset($_GET['id'])){
		$id = trim($mysqli->real_escape_string($_GET['id']));
	}
?>
<?php
	if($mod == 'plan'){
		if($act == 'create'){
			echo "<pre>";
			echo print_r($_POST);
			echo "</pre>";
		}
	}
?>



















