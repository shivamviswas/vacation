
<?php
include_once 'db.php';
require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';

if (isset($_POST['name']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="INSERT INTO `contact_us_data`(`id`,`name`,`mobile`,`email`) VALUES(NULL,'$name','$mobile','$email');";
    $query=mysqli_query($scon,$sql);
    if($query)
    {
        $mail->Host = "mail.mountainvacations.in";					// Enter "mail.my-domain.com"
        $mail->Username = "sales@mountainvacations.in";			// Enter an email address created through cPanel
        $mail->Password = "yogender@1234";						// Enter the email password created through cPanel
        $mail->AddAddress($email, $name); // Enter the recipient "to" email address
        $mail->Subject = "Thank you for contact on us !";
        $message = "Relax now...Our Customer Executive will Contact You Shortly.
				You will Now Receive Regular News and updates , Attractive Offers from Us.";
        $mail->From = "sales@mountainvacations.in";
        $mail->FromName = $name;
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Body = $message;
        $mail->AltBody ="Name    : {$name}\n\nEmail   : {\"sales@mountainvacations.in\"}\n\nMessage : {$message}";
        $mail->SMTPDebug  = 0;								// Change to "2" to see full SMTP connection output

        if(!$mail->Send())
        {
            echo "Message could not be sent. <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }

        echo "1";
    }
    else
    {
        echo '2';
    }

}
    /*$name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];*/



