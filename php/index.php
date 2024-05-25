<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "contacto@casha.mx";
    $subject = "Nuevo mensaje de contacto de $name";
    $body = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono:$phone\nMotivo:$subject\n\nMensaje:\n$message";
    
    // Enviar el correo electrónico
    if (mail($to, $subject, $body)) {
        echo "¡Gracias por tu mensaje! Me pondre en contacto contigo pronto.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
