<?php

use PHPMailer\PHPMailer\PHPMailer;

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smptp.gmail.com';
$mail->SMTPAuth = true;  //autenticacion
$mail->Username = '';

echo "<p>$to</p>";
echo "<p>$subject</p>";
echo "<p>$message</p>";
