<?php

require 'PHPMailerAutoload.php';
include 'templates.php';

$mail = new PHPMailer;

//Mail Data
$Username   = 'web@creaprac.com';
$Password   = 'creaWeb1!';
$FromName   = 'Web Creaprac';

//To Data
$emailTo    = 'jordancg91@gmail.com';
$nameTo     = 'Jordan Cortes';

//Form Data
$name       =  (string) htmlspecialchars( $_POST['first'] );
$email      =  (string) htmlspecialchars( $_POST['email'] );
$phone      =  (string) htmlspecialchars( $_POST['phone'] );
$company    =  (string) htmlspecialchars( $_POST['company'] );
$city       =  (string) htmlspecialchars( $_POST['city'] );
$state      =  (string) htmlspecialchars( $_POST['state'] );
$country    =  (string) htmlspecialchars( $_POST['country'] );
$message    =  (string) htmlspecialchars( $_POST['message'] );

$mail->isSMTP();
$mail->Host = 'smtp.creaprac.com';
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = $Username;
$mail->Password = $Password;

$mail->From = $Username;
$mail->FromName = $FromName;
$mail->addAddress($emailTo, $nameTo);
$mail->addReplyTo($email, $name);

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Feedback via Creaprac.com';
$mail->Body    = bodyHTML($name, $email, $phone, $company, $city, $state, $country, nl2br( $message ));
$mail->AltBody = bodyPlain($name, $email, $phone, $company, $city, $state, $country, $message);

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo $message . "\n.";

echo 'Message has been sent';

?>