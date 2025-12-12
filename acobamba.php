<?php
// acobamba.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acobamba - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/acobamba-hero.jpg');">
        <div class="hero-overlay">
            <h1>Acobamba</h1>
            <p>Descubre la belleza natural de los Andes</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre Acobamba</h2>
                    <p>Acobamba es un destino espectacular ubicado en el corazón de los Andes peruanos. Con paisajes impresionantes y una rica cultura local, este lugar ofrece una experiencia única para los visitantes que buscan conectar con la naturaleza y las tradiciones andinas.</p>
                    
                    <p>Este hermoso distrito se caracteriza por sus montañas majestuosas, valles verdes y un clima andino que varía según la temporada. La comunidad local conserva sus tradiciones ancestrales, ofreciendo a los visitantes la oportunidad de experimentar la auténtica vida en los Andes.</p>
                    
                    <h3>🏔️ Atractivos Principales</h3>
                    <ul>
                        <li><strong>Paisajes andinos impresionantes:</strong> Montañas que superan los 4,000 metros de altura con vistas panorámicas inolvidables.</li>
                        <li><strong>Comunidades locales auténticas:</strong> Experimenta la hospitalidad de los pobladores y sus costumbres milenarias.</li>
                        <li><strong>Flora y fauna única:</strong> Observa alpacas, llamas, vicuñas y una variedad de aves andinas en su hábitat natural.</li>
                        <li><strong>Arquitectura tradicional:</strong> Casas de adobe y piedra que se integran perfectamente con el entorno natural.</li>
                    </ul>
                    
                    <h3>🎯 Actividades Recomendadas</h3>
                    <ul>
                        <li><strong>Trekking y senderismo:</strong> Rutas de diferentes niveles para explorar los alrededores.</li>
                        <li><strong>Fotografía de paisajes:</strong> Captura los atardeceres más espectaculares de los Andes.</li>
                        <li><strong>Turismo vivencial:</strong> Convive con las familias locales y aprende sus costumbres.</li>
                        <li><strong>Observación de aves:</strong> Más de 50 especies de aves endémicas de la región.</li>
                        <li><strong>Gastronomía local:</strong> Prueba platos típicos preparados con productos orgánicos de la zona.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/acobamba-hero.jpg" alt="Vista de Acobamba">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>🧥</span>
                            <p><strong>Ropa abrigadora:</strong> El clima puede ser frío, especialmente por las noches.</p>
                        </div>
                        <div class="consejo-item">
                            <span>💧</span>
                            <p><strong>Hidratación:</strong> Bebe abundante agua para evitar el mal de altura.</p>
                        </div>
                        <div class="consejo-item">
                            <span>☀️</span>
                            <p><strong>Protección solar:</strong> El sol es muy fuerte en las alturas.</p>
                        </div>
                        <div class="consejo-item">
                            <span>📷</span>
                            <p><strong>Cámara fotográfica:</strong> No olvides capturar los momentos especiales.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Altitud:</strong> 3,450 msnm</p>
                            <p><strong>Clima:</strong> Frío andino</p>
                            <p><strong>Temperatura:</strong> 5°C - 18°C</p>
                            <p><strong>Mejor época:</strong> Mayo - Octubre</p>
                            <p><strong>Duración:</strong> 2-3 días</p>
                            <p><strong>Distancia:</strong> 450 km desde Lima</p>
                        </div>
                    </div>
                    
                    <div class="cta-box">
                        <h3>¿Interesado?</h3>
                        <p>Contáctanos para más información</p>
                        <a href="contacto.php" class="btn-primary">Contactar</a>
                    </div>
                    
                    <div class="otros-destinos">
                        <h3>Otros Destinos</h3>
                        <ul>
                            <li><a href="choclococha.php">Choclococha</a></li>
                            <li><a href="mirador.php">Mirador</a></li>
                            <li><a href="ruinas.php">Ruinas</a></li>
                            <li><a href="catedral.php">Catedral</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>