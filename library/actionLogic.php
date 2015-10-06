<?php
	session_start();
	
	require "connect.php";
	include "function.lib.php";
	
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
	if($mod == 'register'){
		if($act == 'insert'){
			if(!empty($_POST['firstname'])){
				$firstname = trim($mysqli->real_escape_string($_POST['firstname']));
			}
			else{
				setSession('register_firstname_empty',1);
			}
			if(!empty($_POST['lastname'])){
				$lastname = trim($mysqli->real_escape_string($_POST['lastname']));
			}
			if(!empty($_POST['ktp'])){
				$ktp = trim($mysqli->real_escape_string($_POST['ktp']));
			}
			else{
				setSession('register_ktp_empty',1);
			}
			if(!empty($_POST['birth_place'])){
				$birth_place = trim($mysqli->real_escape_string($_POST['birth_place']));
			}
			else{
				setSession('register_birth_place_empty',1);
			}
			if(!empty($_POST['date'])){
				$date = trim($mysqli->real_escape_string($_POST['date']));
			}
			else{
				setSession('register_date_empty',1);
			}
			if(!empty($_POST['month'])){
				$month = trim($mysqli->real_escape_string($_POST['month']));
			}
			else{
				setSession('register_month_empty',1);
			}
			if(!empty($_POST['year'])){
				$year = trim($mysqli->real_escape_string($_POST['year']));
			}
			else{
				setSession('register_year_empty',1);
			}
			if(!empty($_POST['email'])){
				$email = trim($mysqli->real_escape_string($_POST['email']));
			}
			if(!empty($_POST['telephone'])){
				$telephone = trim($mysqli->real_escape_string($_POST['telephone']));
			}
			if(!empty($_POST['school'])){
				$school = trim($mysqli->real_escape_string($_POST['school']));
			}
			if(isset($_POST['migrate'])){
				$migrate = 1;
			}
			else{
				$migrate = 0;
			}
			
			$convert_date = strtotime($date.'-'.$month.'-'.$year);
			$birth_date = date('Y-m-d',$convert_date);
			
			$check_ktp = fetch_db('participant','WHERE ktp = '.$ktp);
			if(empty($check_ktp)){
				setSession('register_ktp_exist',1);
			}
			$check_email = fetch_db('participant','WHERE email = '.$email);
			if(empty($check_email)){
				setSession('register_email_exist',1);
			}
			
			$query = "INSERT INTO participant (firstname,lastname,ktp,birth_place,birth_date,school,email,telephone,migrate,workshop,attend,registered) VALUES ('".$firstname."','".$lastname."','".$ktp."','".$birth_place."','".$birth_date."','".$school."','".$email."','".$telephone."',".$migrate.",1,1,NOW())";
			$result = $mysqli->query($query);
			
			if($result){
				setSession('success_register_insert',1);
			}
			else{
				setSession('failed_register_insert',1);
			}
		}
	}
	else if($mod == 'ktp'){
		if($act == 'search'){
			if(!empty($_POST['ktp'])){
				$ktp = trim($mysqli->real_escape_string($_POST['ktp']));
				
				$sktps = fetch_db('participant','WHERE ktp = '.$ktp);
				foreach($sktps as $sktp){
					$participant_id = $sktp['id'];
					$name = $sktp['firstname'].' '.$sktp['lastname'];
				}
				
				if($_SESSION['user_company_id'] == 0){
					$query = "INSERT INTO history_search_participant (ktp,name,time,participant_id) VALUES ('".$ktp."','".$name."',NOW(),".$participant_id.")";
					$result = $mysqli->query($query);
				}
				
				header('location:../index.php?ktp='.$ktp);
				exit;
			}
		}
	}
	else if($mod == "participant"){
		if($act == "search"){
			if(!empty($_POST['search_by'])){
				$search_by = trim($mysqli->real_escape_string($_POST['search_by']));
			}
			if(!empty($_POST['name'])){
				$name = trim($mysqli->real_escape_string($_POST['name']));
			}
			else{
				$name = "";
			}
			if(isset($_POST['workshop'])){
				$workshop = trim($mysqli->real_escape_string($_POST['workshop']));
			}
			else{
				$workshop = "";
			}
			
			header('location:../participant.php?q='.$name.'&by='.$search_by.'&workshop='.$workshop);
			exit;
		}
	}
	else if($mod == "company"){
		if($act == "search"){
			if(!empty($_POST['search_by'])){
				$search_by = trim($mysqli->real_escape_string($_POST['search_by']));
			}
			if(!empty($_POST['name'])){
				$name = trim($mysqli->real_escape_string($_POST['name']));
			}
			else{
				setSession('search_company_empty',1);
			}
			
			header('location:../company.php?q='.$name.'&by='.$search_by);
			exit;
		}
	}
	else if($mod == "activity"){
		if($act == "search"){
			if(!empty($_POST['date'])){
				$date = trim($mysqli->real_escape_string($_POST['date']));
			}
			if(!empty($_POST['company']))
				$company = trim($mysqli->real_escape_string($_POST['company']));
			else
				$company = "";
			
			header('location:../activity.php?date='.$date.'&company='.$company);
			exit;
		}
	}
	else if($mod == "participant_search"){
		if($act == "search"){
			if(!empty($_POST['date']))
				$date = trim($mysqli->real_escape_string($_POST['date']));
			
			if(!empty($_POST['ktp']))
				$ktp = trim($mysqli->real_escape_string($_POST['ktp']));
			else
				$ktp = "";
			
			if(!empty($_POST['start_hour']) && !empty($_POST['start_minute']))
				$start_time = trim($mysqli->real_escape_string($_POST['start_hour'])).':'.trim($mysqli->real_escape_string($_POST['start_minute'])).':59';
			
			if(!empty($_POST['stop_hour']) && !empty($_POST['stop_minute']))
				$stop_time = trim($mysqli->real_escape_string($_POST['stop_hour'])).':'.trim($mysqli->real_escape_string($_POST['stop_minute'])).':59';
			
			if(strtotime($stop_time) < strtotime($start_time)){
				setSession('participant_search_stop_more_start',1);
			}
			else{
				header('location:../participant_search.php?date='.$date.'&ktp='.$ktp.'&start_time='.$start_time.'&stop_time='.$stop_time);
				exit;
			}
		}
	}
	else if($mod == "open_position"){
		if($act == "search"){
			if(!empty($_POST['company']))
				$company = trim($mysqli->real_escape_string($_POST['company']));
			else
				$company = "";
			
			if(!empty($_POST['placement']))
				$placement = trim($mysqli->real_escape_string($_POST['placement']));
			else
				$placement = "";
			
			header('location:../open_position.php?company='.$company.'&placement='.$placement);
			exit;
		}
	}
	else if($mod == "apply"){
		if($act == "insert"){
			if(!empty($_POST['participant_id']))
				$participant_id = trim($mysqli->real_escape_string($_POST['participant_id']));
			
			if(!empty($_POST['placement']))
				$position_id = trim($mysqli->real_escape_string($_POST['placement']));
			
			if(!empty($_POST['comment']))
				$comment = trim($mysqli->real_escape_string($_POST['comment']));
			else
				$comment = "";
			
			$company_id = trim($mysqli->real_escape_string($_SESSION['user_company_id']));
			
			$participants = fetch_db('participant','WHERE id = '.$participant_id);
			foreach($participants as $participant){
				$participant_name = $participant['firstname'].' '.$participant['lastname'];
			}
			
			$companies = fetch_db('company','WHERE id = '.$company_id);
			foreach($companies as $company){
				$company_name = $company['name'];
			}
			
			$exist = fetch_db('history_activity','WHERE participant_id = '.$participant_id.' AND company_id = '.$company_id.' AND position_id = '.$position_id);
			if(empty($exist)){
				$query = "INSERT INTO history_activity (participant_id,company_id,position_id,participant_name,company_name,time,comment) VALUES (".$participant_id.",".$company_id.",".$position_id.",'".$participant_name."','".$company_name."',NOW(),'".$comment."')";
				$result = $mysqli->query($query);
			
				if($result){
					$_SESSION['success_insert_apply'] = 1;
					header('location:applied.php?new=new');
					exit;
				}
				else{
					setSession('failed_insert_apply',1);
				}
			}
			else{
				setSession('failed_insert_apply_exists',1);
			}
		}
	}
	else if($mod == "attendance"){
		if($act == "insert"){
			if(!empty($_GET['ktp'])){
				$ktp = trim($mysqli->real_escape_string($_GET['ktp']));
			}
			else{
				setSession('failed_insert_attendance',1);
			}
			
			$query = "UPDATE participant SET attend = 1 WHERE ktp = '".$ktp."'";
			$result = $mysqli->query($query);
			
			if($result){
				setSession('success_insert_attendance',1);
			}
			else{
				setSession('failed_insert_attendance',1);
			}
		}
	}
	else if($mod == "applied"){
		if($act == "search"){
			if(!empty($_POST['position']))
				$position = trim($mysqli->real_escape_string($_POST['position']));
			
			if(!empty($_POST['placement']))
				$placement = trim($mysqli->real_escape_string($_POST['placement']));
			else
				$placement = "";
			
			header('location:../applied.php?position='.$position.'&placement='.$placement);
			exit;
		}
	}
	else if($mod == "company_open_position"){
		if($act == "insert"){
			if(!empty($_POST['position']))
				$position = trim($mysqli->real_escape_string($_POST['position']));
			else
				setSession('empty_open_position_position',1);
			
			if(!empty($_POST['placement']))
				$placement = trim($mysqli->real_escape_string($_POST['placement']));
			else
				setSession('empty_open_position_placement',1);
			
			if(!empty($_POST['man']))
				$man = trim($mysqli->real_escape_string($_POST['man']));
			else
				setSession('empty_open_position_man',1);
			
			$exists = fetch_db('company_open_position','WHERE company_id = '.$_SESSION['user_company_id'].' AND position_name = "'.$position.'" AND placement = "'.$placement.'"');
			if(empty($exists)){
				$query = "INSERT INTO company_open_position (company_id,position_name,placement,new,man) VALUES (".$_SESSION['user_company_id'].",'".$position."','".$placement."',1,".$man.")";
				$result = $mysqli->query($query);
			
				if($result){
					setSession('success_insert_new_position',$mysqli->insert_id);
				}
				else{
					setSession('failed_insert_new_position',1);
				}
			}
			else{
				setSession('failed_insert_new_position',1);
			}
		}
	}
?>



















