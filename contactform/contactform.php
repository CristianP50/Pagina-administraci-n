<?php 

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['phone'];
$empresa = $_POST['mensajes'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este mensaje fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$telefono."\r\n";
$message .= "mensaje: ".$empresa."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'cristianjp.padierna2@gmail.com';
$asunto = 'mensaje de mi web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='';</script>";

 ?>