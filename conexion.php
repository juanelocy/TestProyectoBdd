<?php
$servidor = "localhost"; // Cambia esto si tu servidor MySQL está en otro lugar
$usuario = "root";
$contrasena = "JcYm672122";
$basedatos = "pruebaConexion";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
