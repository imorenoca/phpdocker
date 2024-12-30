<?php

$host = 'mariadb'; // o 'mariadb' si usas Docker Compose
$database = 'test_db'; // Sustituye con tu base de datos
$username = 'root'; // Si usas el usuario root
$password = 'my_secure_password'; // Sustituye con la contraseña que hayas configurado

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
