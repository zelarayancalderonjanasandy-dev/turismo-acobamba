<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'turismo_peru';
$username = 'root'; // Cambia esto según tu configuración
$password = '';     // Cambia esto según tu configuración

// Inicializar variables
$mensaje_exito = '';
$mensaje_error = '';

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Crear conexión PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Obtener y limpiar los datos del formulario
        $nombre_completo = trim($_POST['nombre_completo']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $destino = trim($_POST['destino']);
        $fecha_viaje = trim($_POST['fecha_viaje']);
        $numero_personas = (int)$_POST['numero_personas'];
        $mensaje = trim($_POST['mensaje']);
        
        // Validar campos requeridos
        if (empty($nombre_completo) || empty($email)) {
            throw new Exception("El nombre y el email son obligatorios.");
        }
        
        // Validar formato de email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El formato del email no es válido.");
        }
        
        // Preparar la consulta SQL
        $sql = "INSERT INTO contactos (nombre_completo, email, telefono, destino, fecha_viaje, numero_personas, mensaje) 
                VALUES (:nombre_completo, :email, :telefono, :destino, :fecha_viaje, :numero_personas, :mensaje)";
        
        $stmt = $pdo->prepare($sql);
        
        // Ejecutar la consulta
        $stmt->execute([
            ':nombre_completo' => $nombre_completo,
            ':email' => $email,
            ':telefono' => $telefono,
            ':destino' => $destino,
            ':fecha_viaje' => !empty($fecha_viaje) ? $fecha_viaje : null,
            ':numero_personas' => $numero_personas,
            ':mensaje' => $mensaje
        ]);
        
        $mensaje_exito = "¡Mensaje enviado exitosamente! Nos pondremos en contacto pronto.";
        
        // Opcional: Redirigir a WhatsApp
        if (isset($_POST['enviar_whatsapp'])) {
            $telefono_whatsapp = "980479052"; // Cambia esto por tu número de WhatsApp
            $texto = urlencode("Hola, me gustaría información sobre el destino: $destino");
            header("Location: https://wa.me/$telefono_whatsapp?text=$texto");
            exit;
        }
        
    } catch (PDOException $e) {
        $mensaje_error = "Error de base de datos: " . $e->getMessage();
    } catch (Exception $e) {
        $mensaje_error = $e->getMessage();
    }
}

// Obtener lista de destinos para el dropdown
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT DISTINCT nombre FROM destinos ORDER BY nombre");
    $destinos = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Si no hay destinos en la BD, usar una lista por defecto
    if (empty($destinos)) {
        $destinos = ['Acobamba', 'Artesanía', 'Catedral', 'Ccaccasiri', 'Choclococha', 
                     'Mirador', 'Paracas', 'Ruinas'];
    }
} catch (PDOException $e) {
    // Lista por defecto si hay error
    $destinos = ['Acobamba', 'Artesanía', 'Catedral', 'Ccaccasiri', 'Choclococha', 
                 'Mirador', 'Paracas', 'Ruinas'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Turismo Perú</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #c41e3a;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: 500;
        }
        
        label span {
            color: #c41e3a;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            background-color: #e8f0fe;
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        select {
            cursor: pointer;
        }
        
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-whatsapp:hover {
            background-color: #20BA5A;
        }
        
        .btn-whatsapp::before {
            content: "📱";
        }
        
        .mensaje-exito {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        
        .mensaje-error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }
        
        .campo-obligatorio {
            color: #666;
            font-size: 12px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Envíanos un Mensaje</h1>
        
        <?php if ($mensaje_exito): ?>
            <div class="mensaje-exito"><?php echo $mensaje_exito; ?></div>
        <?php endif; ?>
        
        <?php if ($mensaje_error): ?>
            <div class="mensaje-error"><?php echo $mensaje_error; ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label>Nombre Completo <span>*</span></label>
                <input type="text" name="nombre_completo" required 
                       value="<?php echo isset($_POST['nombre_completo']) ? htmlspecialchars($_POST['nombre_completo']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Email <span>*</span></label>
                <input type="email" name="email" required 
                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Teléfono</label>
                <input type="tel" name="telefono" 
                       value="<?php echo isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Destino de Interés</label>
                <select name="destino">
                    <option value="">Seleccione un destino</option>
                    <?php foreach ($destinos as $destino): ?>
                        <option value="<?php echo htmlspecialchars($destino); ?>"
                                <?php echo (isset($_POST['destino']) && $_POST['destino'] === $destino) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($destino); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Fecha de Viaje (Aproximada)</label>
                <input type="date" name="fecha_viaje" 
                       value="<?php echo isset($_POST['fecha_viaje']) ? htmlspecialchars($_POST['fecha_viaje']) : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Número de Personas</label>
                <input type="number" name="numero_personas" min="1" value="1">
            </div>
            
            <div class="form-group">
                <label>Mensaje <span>*</span></label>
                <textarea name="mensaje" required><?php echo isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
            </div>
            
            <button type="submit" name="enviar_whatsapp" class="btn-whatsapp">
                Enviar a WhatsApp
            </button>
            
            <p class="campo-obligatorio">* Campos obligatorios</p>
        </form>
    </div>
</body>
</html>