<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $nota = $_POST["nota"];

    // Correo electrónico al que se enviará la información del formulario
    $destinatario = "juanbenavidesavila@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de contacto";

    // Contenido del correo electrónico
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellido: $apellido\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Nota:\n$nota\n";

    // Cabeceras del correo electrónico
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "¡Gracias por contactarnos! Tu mensaje ha sido enviado.";
    } else {
        echo "Lo siento, ha habido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si se accede directamente a este script, mostrar un mensaje de error
    echo "Acceso no permitido.";
}
?>
