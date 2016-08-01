<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
	
$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$subject = @trim(stripslashes($_POST['subject']));
$website = @trim(stripslashes($_POST['website']));
$message = @trim(stripslashes($_POST['message']));

	
$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message;
	
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'server18.hostingraja.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@devchakra.com';                 // SMTP username
$mail->Password = 'wifipassword';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
	
$mail->setFrom('info@devchakra.com',$name);
$mail->addAddress('info@devchakra.com', 'DevChakra Team');     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML
	
$mail->Subject = $subject;
$mail->Body    = $body;
	
if(!$mail->send()) {
	echo  'Message could not be sent because </br> Error: ' . $mail->ErrorInfo;
	//echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo  '1';
}