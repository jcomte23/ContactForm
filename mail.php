<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendEmail($subject,$body,$email,$name,$html = false){
    //configuracion inicial del servidor de correos
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';                   
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port= 465;
    $mail->Username   = 'javiercombita2014@gmail.com';                     //SMTP username
    $mail->Password   = 'knojbheybraogygk';         


    //ingresando destinatarios
    $mail->setFrom('contact@jcomtec.com', 'JCOMTEC');
    $mail->addAddress($email, $name);

    //Contenido del correo
    $mail->isHTML($html);                                  
    $mail->Subject = $subject;
    $mail->Body= $body;

    // Mandar el correo
    $mail->send();

    
}

?>