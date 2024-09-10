<?php
$conexion = new mysqli("localhost", "root", "", "sis_asistencia", "3306");
$conexion->set_charset("utf8");

// Establecer la zona horaria para la conexión MySQL
$conexion->query("SET time_zone = '-05:00'");  // Para Perú, UTC-5

// Establecer la zona horaria en PHP
date_default_timezone_set('America/Lima');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>