<?php  

// Llamando a los campos
$nombre = $_POST['usuario'];
$telefono = $_POST['numero'];
$fecha = $_POST['fecha'];
$servicios = $_POST['servicios'];

// Datos para el correo
$destinatario = "info@tallerawa.com";
$asunto = "Contacto desde nuestra web";
$cabeceras = 'From: info@tallerawa.com' . "\r\n" .
'Reply-To: info@tallerawa.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$carta = "De: $nombre \n";
$carta .= "Celular: $telefono \n";
$carta .= "Separo cita para el dia: $fecha \n";
$carta .= "Por el servicio de: $servicios";

// Enviando Mensaje
mail($destinatario, $asunto, $carta, $cabeceras);
header('Location:index.html');
?>