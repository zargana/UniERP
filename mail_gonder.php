<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'lib/PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->setLanguage('tr');
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "akademikfaaliyet@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "akademik1234faaliyet";
//Set who the message is to be sent from
$mail->setFrom('cehasan@gmail.com', 'Web Sitesinden');
//Set an alternative reply-to address
$mail->addReplyTo('eposta@hasantokatli.com', 'Hasan Tokatlı');
//Set who the message is to be sent to
$mail->addAddress('hasantktl@gmail.com', 'Hasan Tokatlı');
//Set the subject line
$mail->Subject = 'Web sitenizden bir mesaj var' . date('d.m.Y H:i:s');
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($_POST['mesaj']);
//Replace the plain text body with one created manually
$mail->AltBody = $_POST['mesaj'];
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.gif');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mail gönderiminde hata oluştu: " . $mail->ErrorInfo;
} else {
    echo "Mesaj başarıyla gönderildi!";
}