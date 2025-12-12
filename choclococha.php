<?php
// choclococha.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choclococha - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/choclococha.jpg');">
        <div class="hero-overlay">
            <h1>Laguna Choclococha</h1>
            <p>Un espejo de agua en las alturas de los Andes</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre Choclococha</h2>
                    <p>La Laguna Choclococha es uno de los cuerpos de agua más espectaculares de los Andes peruanos. Situada a más de 4,500 metros sobre el nivel del mar, esta laguna de aguas cristalinas está rodeada de imponentes montañas y ofrece paisajes de ensueño que parecen sacados de una postal.</p>
                    
                    <p>Este destino es perfecto para los amantes de la naturaleza y la fotografía. Las aguas de Choclococha reflejan el cielo y las montañas circundantes, creando un efecto visual impresionante. La laguna también es hogar de diversas especies de aves acuáticas y fauna andina.</p>
                    
                    <h3>💧 Atractivos Principales</h3>
                    <ul>
                        <li><strong>Laguna de altura:</strong> Cuerpo de agua cristalina a más de 4,500 msnm.</li>
                        <li><strong>Paisajes andinos:</strong> Montañas nevadas y valles que rodean la laguna.</li>
                        <li><strong>Avistamiento de aves:</strong> Flamencos, patos andinos y otras especies acuáticas.</li>
                        <li><strong>Fauna silvestre:</strong> Vicuñas, vizcachas y zorros andinos en los alrededores.</li>
                        <li><strong>Atardeceres únicos:</strong> Vistas espectaculares del sol reflejado en el agua.</li>
                    </ul>
                    
                    <h3>🎯 Actividades Recomendadas</h3>
                    <ul>
                        <li><strong>Fotografía de paisajes:</strong> Captura los reflejos perfectos en el agua.</li>
                        <li><strong>Observación de aves:</strong> Identifica especies endémicas de la región.</li>
                        <li><strong>Caminatas:</strong> Recorre los senderos alrededor de la laguna.</li>
                        <li><strong>Pesca deportiva:</strong> Captura truchas en temporada permitida.</li>
                        <li><strong>Camping:</strong> Acampa bajo las estrellas (con permisos).</li>
                        <li><strong>Contemplación:</strong> Disfruta de la paz y tranquilidad del lugar.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/choclococha.jpg" alt="Laguna Choclococha">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>🏔️</span>
                            <p><strong>Altitud:</strong> Aclimátate previamente, la laguna está a gran altura.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🧥</span>
                            <p><strong>Abrigo:</strong> Temperaturas muy bajas, especialmente al amanecer.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🌤️</span>
                            <p><strong>Clima:</strong> Lleva ropa impermeable, el clima cambia rápidamente.</p>
                        </div>
                        <div class="consejo-item">
                            <span>📷</span>
                            <p><strong>Cámara:</strong> No olvides baterías extra por el frío.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Altitud:</strong> 4,530 msnm</p>
                            <p><strong>Temperatura:</strong> -5°C a 10°C</p>
                            <p><strong>Extensión:</strong> 13 km²</p>
                            <p><strong>Mejor época:</strong> Mayo - Septiembre</p>
                            <p><strong>Duración:</strong> 1 día completo</p>
                            <p><strong>Acceso:</strong> Carretera desde Huancavelica</p>
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
                            <li><a href="mirador.php">Mirador</a></li>
                            <li><a href="acobamba.php">Acobamba</a></li>
                            <li><a href="ccaccasiri.php">Ccaccasiri</a></li>
                            <li><a href="ruinas.php">Ruinas</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>