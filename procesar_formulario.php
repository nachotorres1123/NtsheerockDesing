<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $receiving_email_address = 'modelospicheo@gmail.com';  // Cambia esto por tu dirección de correo electrónico

    $subject = 'Mensaje de contacto de ' . $nombre;
    $message = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

    if (mail($receiving_email_address, $subject, $message, $headers)) {
        echo "OK";  // Envío exitoso
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Acceso no válido.";
}
?>
