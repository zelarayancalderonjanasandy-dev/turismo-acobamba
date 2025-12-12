<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'turismo_peru');

// Crear conexión
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos");
}

// Establecer charset UTF-8
if (!$conexion->set_charset("utf8mb4")) {
    die("Error cargando el conjunto de caracteres utf8mb4: " . $conexion->error);
}

// Función para limpiar datos de entrada
function limpiar_dato($dato) {
    global $conexion;
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato, ENT_QUOTES, 'UTF-8');
    return $conexion->real_escape_string($dato);
}
?>