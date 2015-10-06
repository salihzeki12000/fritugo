<?php
	$mysqli = new mysqli('localhost','root','','fritugo');
	
	if($mysqli->connect_error){
		trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
	}
?>