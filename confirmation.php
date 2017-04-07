<?php
include("connection.php");
$hex=$_GET["hex"];
$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);
$st=0;
$hex;
while($row = $result->fetch_assoc())
{
	$st=1;
	$email=$row["email"];
       break;
	             
}/*
 
 $recipients = $email;

    $headers['From']    = 'info@theapproach.in';
    $headers['To']      = $email;
    $headers['Subject'] = 'The Approach Account Confirmation';

    $body = '<html><h1>Activate Your The Approach Account</h1><br/>
<a href="theapproach.in/confirmMe.php?hex='.$hex.'">Click Here</a>
</html>';

    $smtpinfo["host"] = "smtp.server.com";
    $smtpinfo["port"] = "25";
    $smtpinfo["auth"] = true;
    $smtpinfo["username"] = "smtp_user";
    $smtpinfo["password"] = "smtp_password";


    // Create the mail object using the Mail::factory method
    $mail_object =& Mail::factory("smtp", $smtpinfo); 

    $mail_object->send($recipients, $headers, $body);*/
	require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();  
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;       
$mail->SMTPSecure = 'ssl';                               // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0099.prod.sin2.secureserver.net';//'smtp.zoho.com';
  // Specify main and backup SMTP servers
  $mail->Port=465;//'587';

                             // Enable SMTP authentication
$mail->Username = 'support@envisionists.in';//'info@technicus.in';                 // SMTP username
$mail->Password = 'indian12';//'shubham@123';
                       // SMTP password
                            // Enable encryption, 'ssl' also accepted

$mail->From = 'support@envisionists.in';
$mail->FromName = 'ENVISIONISTS';
  // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo('support@envisionists.in', 'envisionists');


$mail->WordWrap = 100;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Envisionists Account Confirmation';
$mail->Body    = '<html><h1>Your envisionists Account Activated Successfully.</h1><br/>
<a href="http://envisionists.in">Click Here</a> to Access envisionists.
<h1>Thanks & Regards</h1>
<p>Envisionists </p>

</html>';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
header("Location:envisionists,in");
}
header("Location:envisionists.in");


?>