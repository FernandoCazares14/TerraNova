<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Verifica que el token CSRF recibido sea válido
    if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $mail = "noreply@example.com";

        $destinatario = 'fcj199914@gmail.com';
        $asunto = 'Terra-Nova';

        $header = 'From: ' . $mail . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $message = "Nombre del cliente: " . $name . " \r\n";
        $message .= "Correo del cliente: " . $email . " \r\n";
        $message .= "Telefono del cliente: " . $telefono . " \r\n";
        $message .= "Asunto: " . $mensaje . " \r\n";

        mail($destinatario, $asunto, utf8_decode($mensaje), $header);

        header("Location: index.html");
    } else {
        // Si el token CSRF es inválido, muestra un mensaje de error
        echo "Error: token CSRF inválido";
    }
}
?>