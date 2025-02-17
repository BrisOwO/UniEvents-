<?php
$servidor = "localhost"; 
$usuario = "root"; 
$password = ""; 
$base_datos = "unievents"; 

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
