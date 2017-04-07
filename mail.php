<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
function mailto($content,$email,$head,$uname,$pass,$from,$fromName,$subject){


$mail = new PHPMailer();

$mail->isSMTP();  
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;       
$mail->SMTPSecure = 'ssl';                               // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';//'smtp.zoho.com';
  // Specify main and backup SMTP servers
  $mail->Port=465;//'587';

                             // Enable SMTP authentication
$mail->Username = $uname;//'info@technicus.in';                 // SMTP username
$mail->Password = $pass;//'shubham@123';    
                       // SMTP password
                            // Enable encryption, 'ssl' also accepted

$mail->From = $from;
$mail->FromName =$fromName;
  // Add a recipient
$mail->addAddress($email);               // Name is optional
$mail->addReplyTo($from, $fromName);


$mail->WordWrap = 100;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $content;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
header($head);
}

}
//mailto('<html><h1>TEst Mail</h1></html>','ravdeeps3@gmail.com','','ravdeeps3@gmail.com','jaskaran@123','info@technicus.in', 'VRU Technologies','VRU Technologies Account Confirmation');
?>
</body>
</html>
