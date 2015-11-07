<?php
	session_start();
	$startdate_value = $_POST['value_startdate'];
	$enddate_value = $_POST['value_enddate'];
	$destination_value = $_POST['value_destination'];
	$min_value = $_POST['value_min'];
	$max_value = $_POST['value_max'];
	
	//set sessionnya
	$_SESSION["value_startdate"] = $startdate_value;
	$_SESSION["value_enddate"] = $enddate_value;
	$_SESSION["value_destination"] = $destination_value;
	$_SESSION["value_min"] = $min_value;
	$_SESSION["value_max"] = $max_value;
	
	

?>