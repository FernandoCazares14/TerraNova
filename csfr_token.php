<?php
session_start();

// Genera un token CSRF y lo guarda en la variable $_SESSION['csrf_token']
if(!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];

// Devuelve el token generado como una respuesta HTTP
header('Content-Type: application/json');
echo json_encode(['csrf_token' => $csrf_token]);
?>