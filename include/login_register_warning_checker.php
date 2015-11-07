<?php
	echo 'tjq(window).bind("load",function(){';
	if(isset($_SESSION['fail_email_empty']) || isset($_SESSION['fail_password_empty']) || isset($_SESSION['login_wrong_password']) || isset($_SESSION['login_email_not_found']) || isset($_SESSION['login_unknown_error'])){
		echo 'tjq("a#fritugo-login").trigger("click");';
	}
	else if(isset($_SESSION['username_existed']) || isset($_SESSION['email_existed'])){
		echo 'tjq("a#fritugo-signup").trigger("click");';
	}
	echo '});';

	unset($_SESSION['username_existed']);
	unset($_SESSION['email_existed']);
	unset($_SESSION['fail_email_empty']);
	unset($_SESSION['fail_password_empty']);
	unset($_SESSION['login_wrong_password']);
	unset($_SESSION['login_email_not_found']);
	unset($_SESSION['login_unknown_error']);
?>