<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'turismo_peru';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Obtener el filtro de categoría si existe
    $categoria_filtro = isset($_GET['categoria']) ? $_GET['categoria'] : 'todos';
    
    // IDs de los destinos específicos del menú (ajusta estos IDs según tu base de datos)
    $destinos_ids = [1, 2, 3, 4, 5, 6, 7]; // IDs de: acobamba, artesania, catedral, ccaccasiri, choclococha, mirador, ruinas
    
    // Crear placeholders para la consulta IN
    $placeholders = str_repeat('?,', count($destinos_ids) - 1) . '?';
    
    // Construir la consulta SQL según el filtro
    if ($categoria_filtro === 'todos') {
        $sql = "SELECT * FROM destinos WHERE id IN ($placeholders) ORDER BY nombre";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($destinos_ids);
    } else {
        $sql = "SELECT * FROM destinos WHERE id IN ($placeholders) AND categoria = ? ORDER BY nombre";
        $stmt = $pdo->prepare($sql);
        $params = array_merge($destinos_ids, [$categoria_filtro]);
        $stmt->execute($params);
    }
    
    $destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    $error = "Error al cargar destinos: " . $e->getMessage();
    $destinos = [];
}

// Mapeo de imágenes para cada destino
$imagenes_destinos = [
    'acobamba' => 'https://images.unsplash.com/photo-1501594907352-04cda38ebc29?w=600&h=400&fit=crop',
    'artesania' => 'https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?w=600&h=400&fit=crop',
    'catedral' => 'https://images.unsplash.com/photo-1514214246283-d427a95c5d2f?w=600&h=400&fit=crop',
    'ccaccasiri' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop',
    'choclococha' => 'https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=600&h=400&fit=crop',
    'mirador' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop',
    'ruinas' => 'https://images.unsplash.com/photo-1587974928442-77dc3e0dba72?w=600&h=400&fit=crop'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Destinos - Turismo Acobamba-Huancavelica</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
        }
        
        /* Header */
        header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .logo {
            color: #c41e3a;
            font-size: 24px;
            font-weight: bold;
        }
        
        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        
        .nav-menu a:hover {
            color: #c41e3a;
        }
        
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
            top: 100%;
            margin-top: 10px;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown-content a {
            display: block;
            padding: 12px 16px;
            color: #333;
        }
        
        .dropdown-content a:hover {
            background: #f5f5f5;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #c41e3a 0%, #8b1530 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 20px;
            opacity: 0.9;
        }
        
        /* Filtros */
        .filtros {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-filtro {
            padding: 12px 24px;
            border: 2px solid #c41e3a;
            background: white;
            color: #c41e3a;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .btn-filtro:hover,
        .btn-filtro.activo {
            background: #c41e3a;
            color: white;
        }
        
        /* Grid de Destinos */
        .destinos-grid {
            max-width: 1200px;
            margin: 40px auto 80px;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .destino-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            position: relative;
        }
        
        .destino-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .destino-imagen {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .destino-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #c41e3a;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .destino-info {
            padding: 20px;
        }
        
        .destino-nombre {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .destino-descripcion {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .destino-ubicacion {
            color: #999;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 15px;
        }
        
        .btn-ver-mas {
            display: inline-block;
            padding: 10px 24px;
            background: #c41e3a;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
        }
        
        .btn-ver-mas:hover {
            background: #8b1530;
            transform: scale(1.05);
        }
        
        .mensaje-vacio {
            text-align: center;
            padding: 60px 20px;
            color: #666;
            font-size: 18px;
            grid-column: 1 / -1;
        }
        
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin: 20px auto;
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">🏔️ Turismo Acobamba-Huancavelica</div>
            <ul class="nav-menu">
                <li><a href="index.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="destino.php">Destinos</a>
                    <div class="dropdown-content">
                        <a href="destino.php?destino=acobamba">Acobamba</a>
                        <a href="destino.php?destino=artesania">Artesanía</a>
                        <a href="destino.php?destino=catedral">Catedral</a>
                        <a href="destino.php?destino=ccaccasiri">Ccaccasiri</a>
                        <a href="destino.php?destino=choclococha">Choclococha</a>
                        <a href="destino.php?destino=mirador">Mirador</a>
                        <a href="destino.php?destino=ruinas">Ruinas</a>
                    </div>
                </li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <h1>Nuestros Destinos</h1>
        <p>Explora los lugares más increíbles de Acobamba - Huancavelica</p>
    </section>
    
    <div class="filtros">
        <a href="destino.php?categoria=todos" 
           class="btn-filtro <?php echo $categoria_filtro === 'todos' ? 'activo' : ''; ?>">
            Todos
        </a>
        <a href="destino.php?categoria=naturaleza" 
           class="btn-filtro <?php echo $categoria_filtro === 'naturaleza' ? 'activo' : ''; ?>">
            Naturaleza
        </a>
        <a href="destino.php?categoria=cultural" 
           class="btn-filtro <?php echo $categoria_filtro === 'cultural' ? 'activo' : ''; ?>">
            Cultural
        </a>
        <a href="destino.php?categoria=historico" 
           class="btn-filtro <?php echo $categoria_filtro === 'historico' ? 'activo' : ''; ?>">
            Histórico
        </a>
        <a href="destino.php?categoria=arqueologico" 
           class="btn-filtro <?php echo $categoria_filtro === 'arqueologico' ? 'activo' : ''; ?>">
            Arqueológico
        </a>
    </div>
    
    <?php if (isset($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    
    <div class="destinos-grid">
        <?php if (empty($destinos)): ?>
            <div class="mensaje-vacio">
                No se encontraron destinos en esta categoría.
            </div>
        <?php else: ?>
            <?php foreach ($destinos as $destino): ?>
                <div class="destino-card">
                    <?php 
                    // Usar la imagen del mapeo basado en el nombre del destino
                    $nombre = $destino['nombre'] ?? '';
                    $nombre_lower = strtolower($nombre);
                    
                    // Intentar encontrar la imagen por nombre exacto o por palabra clave
                    $imagen_url = './img/acobamba.jpg'; // imagen por defecto
                    
                    if (isset($imagenes_destinos[$nombre])) {
                        $imagen_url = $imagenes_destinos[$nombre];
                    } elseif (strpos($nombre_lower, 'artesanal') !== false) {
                        $imagen_url = './img/artesania.jpg';
                    } elseif (strpos($nombre_lower, 'catedral') !== false) {
                        $imagen_url = './img/catedral.jpg';
                    } elseif (strpos($nombre_lower, 'ccaccasiri') !== false) {
                        $imagen_url = './img/ccaccasiri.jpg';
                    } elseif (strpos($nombre_lower, 'choclococha') !== false) {
                        $imagen_url = './img/choclococha.jpg';
                    } elseif (strpos($nombre_lower, 'mirador') !== false) {
                        $imagen_url = './img/mirador.jpg';
                    } elseif (strpos($nombre_lower, 'uchkus') !== false || strpos($nombre_lower, 'ruinas') !== false || strpos($nombre_lower, 'wasi') !== false) {
                        $imagen_url = './img/ruinas.jpg';
                    } elseif (strpos($nombre_lower, 'pueblo') !== false || strpos($nombre_lower, 'acobamba') !== false) {
                        $imagen_url = './img/acobamba-hero.jpg';
                    }
                    
                    // Si el destino tiene su propia imagen guardada en la BD, usarla
                    if (!empty($destino['imagen'])) {
                        $imagen_url = $destino['imagen'];
                    }
                    ?>
                    <img src="<?php echo htmlspecialchars($imagen_url); ?>" 
                         alt="<?php echo htmlspecialchars($destino['nombre']); ?>" 
                         class="destino-imagen"
                         onerror="this.src='https://via.placeholder.com/350x250?text=<?php echo urlencode($destino['nombre']); ?>'">
                    
                    <span class="destino-tag">
                        <?php echo ucfirst(htmlspecialchars($destino['categoria'])); ?>
                    </span>
                    
                    <div class="destino-info">
                        <h3 class="destino-nombre">
                            <?php echo htmlspecialchars($destino['nombre']); ?>
                        </h3>
                        <p class="destino-descripcion">
                            <?php echo htmlspecialchars($destino['descripcion']); ?>
                        </p>
                        <?php if (!empty($destino['ubicacion'])): ?>
                            <div class="destino-ubicacion">
                                📍 <?php echo htmlspecialchars($destino['ubicacion']); ?>
                            </div>
                        <?php endif; ?>
                        <?php 
                        // Crear el slug para la URL basado en el nombre
                        $slug_url = strtolower($nombre);
                        $slug_url = str_replace(' ', '-', $slug_url);
                        $slug_url = str_replace(['á','é','í','ó','ú'], ['a','e','i','o','u'], $slug_url);
                        
                        // Determinar el archivo PHP correcto según el nombre
                        $archivo_destino = '';
                        if (strpos($nombre_lower, 'catedral') !== false) {
                            $archivo_destino = 'catedral.php';
                        } elseif (strpos($nombre_lower, 'artesanal') !== false) {
                            $archivo_destino = 'artesania.php';
                        } elseif (strpos($nombre_lower, 'ccaccasiri') !== false) {
                            $archivo_destino = 'ccaccasiri.php';
                        } elseif (strpos($nombre_lower, 'choclococha') !== false) {
                            $archivo_destino = 'choclococha.php';
                        } elseif (strpos($nombre_lower, 'mirador') !== false) {
                            $archivo_destino = 'mirador.php';
                        } elseif (strpos($nombre_lower, 'ruinas') !== false || strpos($nombre_lower, 'wasi') !== false) {
                            $archivo_destino = 'ruinas.php';
                        } elseif (strpos($nombre_lower, 'pueblo') !== false || strpos($nombre_lower, 'acobamba') !== false) {
                            $archivo_destino = 'acobamba.php';
                        } else {
                            $archivo_destino = 'acobamba.php'; // Por defecto
                        }
                        ?>
                        <a href="<?php echo htmlspecialchars($archivo_destino); ?>" class="btn-ver-mas">
                            Ver más →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>