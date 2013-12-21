<?php

require 'PHPMailerAutoload.php';
include 'templates.php';

$mail = new PHPMailer;

//Mail Data
$Username   = 'web@creaprac.com';
$Password   = 'creaWeb1!';
$FromName   = 'Web Creaprac';

//To Data
$emailTo    = 'info@creaprac.com';
$nameTo     = 'Info Creaprac';

//Form Data
$name       =  (string) htmlentities( $_POST['first'] );
$email      =  (string) htmlentities( $_POST['email'] );
$phone      =  (string) htmlentities( $_POST['phone'] );
$company    =  (string) htmlentities( $_POST['company'] );
$city       =  (string) htmlentities( $_POST['city'] );
$state      =  (string) htmlentities( $_POST['state'] );
$country    =  (string) htmlentities( $_POST['country'] );
$message    =  (string) htmlentities( $_POST['message'] );

if ($name != '' && $email != '' && $phone != '' && $company != '' && $city != '' && $state != '' && $country != '' && $message != '')
{
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
}

if(!$mail->send()) {
    header("Location: http://demo.creaprac.com/MX/contact/error.html");
    die();
   //echo 'El mensaje no se pudo enviar.';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

//echo $message . "\n.";
//echo 'Message has been sent';

/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=creaprac_email;host=localhost';
$user = 'creaprac_email';
$pass = 'creaprac1';

try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>  'SET NAMES utf8'));
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$query = 'INSERT INTO mail (name, email, phone, company, city, state, country, message) VALUES (:name, :email, :phone, :company, :city, :state, :country, :message)';

$sth = $dbh->prepare($query);
$sth->bindParam(':name', html_entity_decode( $name ) );
$sth->bindParam(':email', html_entity_decode( $email ) );
$sth->bindParam(':phone', html_entity_decode( $phone ) );
$sth->bindParam(':company', html_entity_decode( $company ) );
$sth->bindParam(':city', html_entity_decode( $city ) );
$sth->bindParam(':state', html_entity_decode( $state ) );
$sth->bindParam(':country', html_entity_decode( $country ) );
$sth->bindParam(':message', html_entity_decode( $message ) );

$sth->execute();

$dbh = null;

header("Location: http://demo.creaprac.com/MX/contact/success.html");
die();

?>