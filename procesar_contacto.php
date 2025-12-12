<?php
// Incluir archivo de conexión
require_once 'db_conexion.php';

// Verificar que el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtener y limpiar datos del formulario
    $nombre = isset($_POST['nombre']) ? limpiar_dato($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? limpiar_dato($_POST['email']) : '';
    $telefono = isset($_POST['telefono']) ? limpiar_dato($_POST['telefono']) : '';
    $mensaje = isset($_POST['mensaje']) ? limpiar_dato($_POST['mensaje']) : '';
    
    // Array para almacenar errores
    $errores = array();
    
    // Validar campos requeridos
    if (empty($nombre)) {
        $errores[] = "El nombre es requerido";
    } elseif (strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres";
    }
    
    if (empty($email)) {
        $errores[] = "El email es requerido";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del email no es válido";
    }
    
    if (empty($mensaje)) {
        $errores[] = "El mensaje es requerido";
    }
    
    // Si hay errores, mostrarlos
    if (!empty($errores)) {
        header("Location: index.php?error=validacion#contacto");
        exit();
    }
    
    // Verificar conexión a la base de datos
    if ($conexion->connect_error) {
        header("Location: index.php?error=conexion#contacto");
        exit();
    }
    
    // Preparar la consulta SQL con prepared statement
    $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje, fecha) VALUES (?, ?, ?, ?, NOW())";
    
    // Preparar el statement
    $stmt = $conexion->prepare($sql);
    
    if ($stmt === false) {
        header("Location: index.php?error=prepare#contacto");
        exit();
    }
    
    // Vincular parámetros (s = string)
    $stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        
        // Obtener el ID del registro insertado
        $ultimo_id = $stmt->insert_id;
        
        // Registrar en log
        $log_message = date('Y-m-d H:i:s') . " - Nuevo contacto: $nombre ($email) - ID: $ultimo_id\n";
        file_put_contents('contactos.log', $log_message, FILE_APPEND);
        
        // Cerrar statement
        $stmt->close();
        $conexion->close();
        
        // Redirección inmediata a página de agradecimiento
        header("Location: gracias.html?id=" . $ultimo_id);
        exit();
        
    } else {
        // Error al ejecutar la consulta
        $stmt->close();
        $conexion->close();
        header("Location: index.php?error=bd#contacto");
        exit();
    }
    
} else {
    // Si no es POST, redireccionar al inicio
    header("Location: index.php");
    exit();
}
?>