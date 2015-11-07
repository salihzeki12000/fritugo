<?php
	date_default_timezone_set('Asia/Jakarta');
	
	function fetch_db($table_name,$where)
	{
		global $mysqli;
		if(!empty($where)){
			$query = "SELECT * FROM ".$table_name." ".$where;
		}
		else{
			$query = "SELECT * FROM ".$table_name;
		}
		$result = $mysqli->query($query);
		if($result->num_rows > 0){
			while($row = mysqli_fetch_assoc($result)){
				$return[] = $row;
			}
		}
		else{
			$return = "";
		}
		return $return;
	}
	
	function fetch_distinct_db($table_name,$row_name,$where)
	{
		global $mysqli;
		if(!empty($where)){
			$query = "SELECT DISTINCT(".$row_name.") FROM ".$table_name." ".$where;
		}
		else{
			$query = "SELECT DISTINCT(".$row_name.") FROM ".$table_name;
		}
		$result = $mysqli->query($query);
		if($result->num_rows > 0){
			while($row = mysqli_fetch_assoc($result)){
				$return[] = $row;
			}
		}
		else{
			$return = "";
		}
		return $return;
	}
	
	function delete_db($table_name,$row_field,$parameter)
	{
		global $mysqli;
		$query = "DELETE FROM ".$table_name." WHERE ".$row_field." = '".$parameter."'";
		$result = $mysqli->query($query);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	function count_rows($table_name,$where)
	{
		global $mysqli;
		if(!empty($where)){
			$query = "SELECT * FROM ".$table_name." ".$where;
		}
		else{
			$query = "SELECT * FROM ".$table_name;
		}
		$result = $mysqli->query($query);
		
		return $result->num_rows;
	}
	
	function setSession($session_name,$session_value)
	{
		$url = $_SERVER['HTTP_REFERER'];
		
		$_SESSION[$session_name] = $session_value;
		header("location:".$url);
		exit;
	}
	
	function autoThumb($image,$additional)
	{
		$image_name = explode('.',$image);
		$new_name = $image_name[0].$additional.'.'.$image_name[1];
		
		return $new_name;
	}
?>