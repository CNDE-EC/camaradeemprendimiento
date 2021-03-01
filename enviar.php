<?php
$destinatario = 'edaygamers@gmail.com';
	
$name = $_POST['name'];
$mail = $_POST['mail'];
$subjetc = $_POST['subject'];
$message = $_POST['message'];

$header = "Enviado desde la pagina de La Camara Nacional de Emprendimineto";
$mensajeCompleto= $message . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto,$message, $header);


echo "<script> alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>