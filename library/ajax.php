<?php
	session_start();
	
	require "connect.php";
	require "function.lib.php";
	
	if(!isset($_POST['mod'])){
		$response['error'] = "Something went wrong. Please refresh the page and try again.";
	}
	else{
		$mod = trim($mysqli->real_escape_string($_POST['mod']));
		
		if($mod == "position"){
			$position_name = trim($mysqli->real_escape_string($_POST['value']));
			$company_id = trim($mysqli->real_escape_string($_POST['company_id']));
			
			$option = "";
			$positions = fetch_db('company_open_position','WHERE company_id = '.$company_id.' AND position_name = "'.$position_name.'"');
			if(!empty($positions)){
				foreach($positions as $position){
					$option .= '<option value="'.$position['id'].'">'.$position['placement'].'</option>';
				}
				$response['data'] = $option;
				$response['status'] = "success";
			}
			else{
				$response['data'] = '<option value="error">Loading...</option>';
				$response['status'] = "empty";
			}
		}
		else if($mod == "position_applied"){
			$position_name = trim($mysqli->real_escape_string($_POST['value']));
			$company_id = trim($mysqli->real_escape_string($_POST['company_id']));
			
			$option = '<option value="">Any Placement</option>';
			$positions = fetch_db('company_open_position','WHERE company_id = '.$company_id.' AND position_name = "'.$position_name.'"');
			if(!empty($positions)){
				foreach($positions as $position){
					$option .= '<option value="'.$position['placement'].'">'.$position['placement'].'</option>';
				}
				$response['data'] = $option;
				$response['status'] = "success";
			}
			else{
				$response['data'] = '<option value="error">Loading...</option>';
				$response['status'] = "empty";
			}
		}
	}

	header('Content-type: application/json');
	echo json_encode($response);
?>