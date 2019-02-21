<?php
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;

require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';

//	===================================================================
//	JUST EDIT BELOW FIVE LINES
//	===================================================================
$mail->Host = "mail.mountainvacations.com";					// Enter "mail.my-domain.com"
$mail->Username = "sales@domain.com";			// Enter an email address created through cPanel
$mail->Password = "yogender@1234";						// Enter the email password created through cPanel
$mail->AddAddress("my-email@gmail.com", "My Name"); // Enter the recipient "to" email address
$mail->Subject = "Feedback from your website!";		// For subject "Any Preferred Email Subject";
//	===================================================================
//  DO NOT EDIT BELOW THIS ~~ MODIFY AT YOUR OWN RISK & DO NOT CONTACT SUPPORT
//  IF YOU NEED HELP, GOOGLE AND LEARN ABOUT PHPMAILER OR CONTACT A PROGRAMMER
//	===================================================================

$mail->From = $email;
$mail->FromName = $name;
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Body = $message;
$mail->AltBody ="Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
$mail->SMTPDebug  = 0;								// Change to "2" to see full SMTP connection output 

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Thank You! Message Sent successfully.";		// Remove this "echo" line if redirecting to thankyou.html
//header('Location: thankyou.html'); 				// Remove the double slash to redirect to thankyou.html
?>