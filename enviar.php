<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = htmlspecialchars($_POST["nombre"]);
    $apellido  = htmlspecialchars($_POST["apellido"]);
    $email     = htmlspecialchars($_POST["email"]);
    $telefono  = htmlspecialchars($_POST["telefono"]);
    $asunto    = htmlspecialchars($_POST["asunto"]);
    $mensaje   = htmlspecialchars($_POST["mensaje"]);

    $destinatario = "dvizueta02@gmail.com";
    $asuntoCorreo = "Nuevo mensaje de contacto: $asunto";
    $contenido    = "Nombre: $nombre $apellido\n";
    $contenido   .= "Correo: $email\n";
    $contenido   .= "Teléfono: $telefono\n";
    $contenido   .= "Mensaje:\n$mensaje\n";

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asuntoCorreo, $contenido, $headers)) {
        echo '<div class="alert alert-success" role="alert">Mensaje enviado con éxito.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al enviar el mensaje.</div>';
    }
}
?>
