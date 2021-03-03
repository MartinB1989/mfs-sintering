<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
$nombre = htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8');
$apellido = htmlspecialchars($_POST['apellido'],ENT_QUOTES,'UTF-8');
$empresa = htmlspecialchars($_POST['empresa'],ENT_QUOTES,'UTF-8');
$correo = htmlspecialchars($_POST['correo'],ENT_QUOTES,'UTF-8');

$mail = new PHPMailer(true);

try {
    // AGREGADO PARA FUNCIONAR EN LOCAL
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'larrori.11@gmail.com';                     //SMTP username
    $mail->Password   = 'tntcnn34';                               //SMTP password
    $mail->SMTPSecure = 'tsl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo,$nombre." ".$apellido );
    $mail->addAddress('j.martin.b1989@gmail.com', 'Martin');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Descarga de solicitud';
    $mail->Body = $nombre." ".$apellido." de ".$empresa." a descargado la solicitud";
    
    $mail->send();
    
    header("Location: ../index.php");
} catch (Exception $e) {
    echo "Algo salio mal, vuelve a intentarlo";
}