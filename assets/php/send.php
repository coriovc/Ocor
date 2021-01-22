<?php
$opt1 = $_POST['opt-1'];
$opt2 = $_POST['opt-2'];
$opt3 = $_POST['opt-3'];
$opt4 = $_POST['opt-4'];
$opt5 = $_POST['opt-5'];
$opt6 = $_POST['opt-6'];

$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviado por: " . $name . " \r\n";
$message .= "E-mail: " . $mail . " \r\n";
$message .= "opciones: " . $opt1 . "," . $opt2 . "," . $opt3 . "," . $opt4 . "," . $opt5 . "," . $opt6 ." \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n\n\n";

$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'marcaocor@gmail.com';
$asunto = 'Contact AUDANA';

mail($para, $asunto, utf8_decode($message), $header);
sleep(7);
header("Location:" . $_SERVER['HTTP_REFERER']);
?>