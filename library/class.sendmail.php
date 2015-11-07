<?php
if(!isset($_SERVER['HTTP_REFERER'])){
	header("location:../404.php");
	exit;
}
else{
	require "connect.php";
	require "function.lib.php";
}

if(!empty($_POST['name'])){
	$name = trim($mysqli->real_escape_string($_POST['name']));
}
if(!empty($_POST['email'])){
	$email = trim($mysqli->real_escape_string($_POST['email']));
}
if(!empty($_POST['subject'])){
	$subject = trim($mysqli->real_escape_string($_POST['subject']));
}
if(!empty($_POST['message'])){
	$content = trim($mysqli->real_escape_string($_POST['message']));
}

$message = "
	<html>
	<body>
		<div style='width:600px;'>
			<table border='0'>
				<tr>
					<td colspan='3'><h3>New Message From ".$name."</h3></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>".$name."</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>".$email."</td>
				</tr>
				<tr>
					<td>Subject</td>
					<td>:</td>
					<td>".$subject."</td>
				</tr>
				<tr>
					<td>Message</td>
					<td>:</td>
					<td>".$content."</td>
				</tr>
			</table>
		</div>
	</body>
	</html>
";

require_once '../js/swiftmailer-5.2.1/lib/swift_required.php';

//Create the Transport
$transport = Swift_SmtpTransport::newInstance('mail.aswsecurity.com', 25)
->setUsername("info@aswsecurity.com")
->setPassword("asw123");

//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);
$mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100));
$mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100, 30));

//Create a message
$message = Swift_Message::newInstance('New Message from '.$name)
->setFrom(array('info@aswsecurity.com' => 'PT. Arnoldy Security Wibawa'))
->setTo(array('info@aswsecurity.com' => 'PT. Arnoldy Security Wibawa'))
->setBody($message, 'text/html')
;

$sent = $mailer->send($message);

if($sent){
	setSession('success_mail_sent','Thank you for your message. We will get back to you soon.');
}
else{
	setSession('failed_mail_sent','Your message failed to send. Please try again!');
}
?>