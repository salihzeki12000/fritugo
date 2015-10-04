<?php 
date_default_timezone_set('Asia/Jakarta');
include('session.php');	
if(isset ($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirmpassword = $_REQUEST['confirmpassword'];
		$hash =md5($password); 
		$time = strtotime("now");

		if($password!=$confirmpassword)
		{
			?>
			<script>
				alert("You password didn't match, please try again!")
				window.history.back();
			</script>
			<?php
		}
		//echo $point;
	}

	$string = "INSERT into frtg_user (created,username,password,hash,email,role,last_login) 
				values ('$time','$username','$password','$hash','$email','1','$time');";
	$result = mysql_query($string);
	if(mysql_affected_rows()>0)
			{
				echo"<script>alert('Register Success! Welcome to Fritugo!');</script>";
				header('location:index.php');
			}


	


?>