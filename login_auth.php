<?php
	include('includes/db.php');
	$username = $_REQUEST["username_login"];
	$pwd = md5($_REQUEST["password"]);
	//echo $pwd;
	
	if(isset($username) && isset($pwd))
	{
		$flag = -1;
		$query = sprintf("Select * from frtg_user where 1;");
		$result = mysql_query($query);
		while($data = mysql_fetch_array($result))
		{
			if($username == $data["username"] && $pwd == $data["hash"])
			{
				
				session_start();
				$_SESSION["username"] = $data["username"];
				$_SESSION["id"]=$data["id"];
				header("location:index.php");
				

				break;
			}
		}
		if($flag == -1)
		{
		?>
			<script type="text/javascript">
				alert("Wrong username or password");
				history.back();
			</script>
		<?php
		}
	}
	else
	{
?>
		<script type="text/javascript">
				alert("Wrong username or password");
				history.back();
		</script>
<?php
	}
?>