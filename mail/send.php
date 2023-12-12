<?php

use PHPMailer\PHPMailer\PHPMailer;

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 

echo "<p>$to</p>";
echo "<p>$subject</p>";
echo "<p>$message</p>";