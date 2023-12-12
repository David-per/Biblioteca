<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $descripcion = $_POST["descripcion"];

    // Aquí puedes agregar la lógica para enviar el correo o guardar la información en una base de datos, etc.

    // Ejemplo de envío de correo electrónico
    $destinatario = "dperer@insdanielblanxart.cat";
    $mensaje = "Nombre: $nombre $apellido\nCorreo: $correo\nAsunto: $asunto\nDescripción: $descripcion";
    $encabezados = "From: $correo";

    mail($destinatario, $asunto, $mensaje, $encabezados);
}
?>
