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
$lang       =  (string) htmlentities( $_POST['lang'] );
$name       =  (string) htmlentities( $_POST['first'] );
$email      =  (string) htmlentities( $_POST['email'] );
$phone      =  (string) htmlentities( $_POST['phone'] );
$company    =  (string) htmlentities( $_POST['company'] );
$city       =  (string) htmlentities( $_POST['city'] );
$state      =  (string) htmlentities( $_POST['state'] );
$country    =  (string) htmlentities( $_POST['country'] );
$message    =  (string) htmlentities( $_POST['message'] );

if ($lang == '')
{
    $lang = 'MX';
}

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
    header("Location: http://www.creaprac.com/" . $lang . "/contact/error.html");
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

$name = html_entity_decode( $name );
$email = html_entity_decode( $email );
$phone = html_entity_decode( $phone );
$company = html_entity_decode( $company );
$city = html_entity_decode( $city );
$state = html_entity_decode( $state );
$country = html_entity_decode( $country );
$message = html_entity_decode( $message );

$sth = $dbh->prepare($query);
$sth->bindParam(':name', $name);
$sth->bindParam(':email', $email);
$sth->bindParam(':phone', $phone);
$sth->bindParam(':company', $company);
$sth->bindParam(':city', $city);
$sth->bindParam(':state', $state);
$sth->bindParam(':country', $country);
$sth->bindParam(':message', $message);

$sth->execute();

$dbh = null;

header("Location: http://www.creaprac.com/" . $lang . "/contact/success.html");
die();

?>