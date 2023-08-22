<?php
require_once '../../database/Database_connection.php';

// Parámetros de conexión
$servidor = 'localhost';
$nombre_usuario = 'root';
$contraseña = '';
$base_de_datos = 'coder_flow';

$conexion = new Database\Database_connection($servidor, $nombre_usuario, $contraseña, $base_de_datos);

// Establecer la conexión
if ($conexion->connect()) {
    echo 'Conexión exitosa a la base de datos.';
    // Aquí puedes realizar consultas y operaciones en la base de datos
} else {
    echo 'Error en la conexión a la base de datos.';
}

?>