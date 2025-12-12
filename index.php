<?php
// index.php - Página Principal
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo  Acobamba - Huancavelica - Descubre la Magia</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Descubre la Magia de Huancavelica</h1>
            <p>Explora destinos inolvidables y vive experiencias únicas</p>
            <a href="destino.php" class="btn-primary">Ver Destinos</a>
        </div>
    </section>

    <section class="destinos-preview">
        <div class="container">
            <h2>Destinos Populares</h2>
            <div class="grid-destinos">
                <?php
                // Array de destinos principales
                $destinos = [
                    [
                        'nombre' => 'Acobamba',
                        'img' => 'acobamba-hero.jpg',
                        'descripcion' => 'Belleza natural incomparable en los Andes',
                        'link' => 'acobamba.php'
                    ],
                    [
                        'nombre' => 'Catedral',
                        'img' => 'catedral.jpg',
                        'descripcion' => 'Historia y arquitectura colonial',
                        'link' => 'catedral.php'
                    ],
                    [
                        'nombre' => 'Choclococha',
                        'img' => 'choclococha.jpg',
                        'descripcion' => 'Laguna espectacular en las alturas',
                        'link' => 'choclococha.php'
                    ],
                    [
                        'nombre' => 'Mirador',
                        'img' => 'mirador.jpg',
                        'descripcion' => 'Vistas panorámicas únicas',
                        'link' => 'mirador.php'
                    ]
                ];
                
                // Generar tarjetas de destinos dinámicamente
                foreach($destinos as $destino) {
                    echo '<div class="destino-card">';
                    echo '<img src="img/' . htmlspecialchars($destino['img']) . '" alt="' . htmlspecialchars($destino['nombre']) . '">';
                    echo '<div class="card-content">';
                    echo '<h3>' . htmlspecialchars($destino['nombre']) . '</h3>';
                    echo '<p>' . htmlspecialchars($destino['descripcion']) . '</p>';
                    echo '<a href="' . htmlspecialchars($destino['link']) . '" class="btn-secondary">Ver más</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="container">
            <div class="info-grid">
                <div class="info-item">
                    <span class="icon">🏔️</span>
                    <h3>Naturaleza Única</h3>
                    <p>Descubre paisajes andinos que te dejarán sin aliento</p>
                </div>
                <div class="info-item">
                    <span class="icon">🏛️</span>
                    <h3>Historia Viva</h3>
                    <p>Explora la rica herencia cultural del Perú</p>
                </div>
                <div class="info-item">
                    <span class="icon">📸</span>
                    <h3>Experiencias Únicas</h3>
                    <p>Crea recuerdos inolvidables en cada destino</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>