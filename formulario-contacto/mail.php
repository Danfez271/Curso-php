<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");


function sendEmail($subject, $body, $email, $name, $html = false) {
    
    // Configuracion de PHPMailer
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '792e2401e70427';
    $phpmailer->Password = 'ce3fc3d68c9628';

    // Destinatario
    $phpmailer->setFrom('testing@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    // Contenido
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Mandar el correo
    $phpmailer->send();



}

?>