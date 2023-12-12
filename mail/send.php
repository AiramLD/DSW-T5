<?php
require_once '../vendor/autoload.php';
require_once 'data.php';
use PHPMailer\PHPMailer\PHPMailer;

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Configuracion del correo
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pw;
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->setFrom($user, 'Airam');

// EL MENSAJE DEL CORREO
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body = $message;

if($mail-> send()){
  echo "<h1>Mensaje enviado correctamente</h1>";
  echo "<p>Para: $to</p>";
  echo "<p>Asunto: $subject</p>";
  echo "<p>Mensaje: $message</p>";
}else {
  echo "<h1>Error al enviar el mensaje</h1>";
}

// CERRAR LA CONEXION
$mail->smtpClose();

