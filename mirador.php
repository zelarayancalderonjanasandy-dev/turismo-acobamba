<?php
// mirador.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirador - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/mirador.jpg');">
        <div class="hero-overlay">
            <h1>Mirador</h1>
            <p>Vistas panorámicas que te dejarán sin aliento</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre el Mirador</h2>
                    <p>El Mirador es un punto estratégico ubicado en las alturas que ofrece vistas panorámicas espectaculares de los valles, montañas y pueblos circundantes. Este lugar se ha convertido en uno de los destinos favoritos para fotógrafos y amantes de las vistas impresionantes.</p>
                    
                    <p>Desde este punto privilegiado, los visitantes pueden observar la inmensidad de los Andes peruanos, con sus picos nevados, valles verdes y la combinación perfecta de naturaleza y cultura. Los amaneceres y atardeceres desde el mirador son experiencias verdaderamente memorables.</p>
                    
                    <h3>👁️ Atractivos Principales</h3>
                    <ul>
                        <li><strong>Vistas panorámicas 360°:</strong> Observa montañas, valles y pueblos desde las alturas.</li>
                        <li><strong>Amaneceres espectaculares:</strong> Presencia el nacimiento del sol iluminando los Andes.</li>
                        <li><strong>Picos nevados:</strong> Contempla las montañas más altas de la región.</li>
                        <li><strong>Valle verde:</strong> Aprecia la belleza de los campos cultivados desde arriba.</li>
                        <li><strong>Fotografía profesional:</strong> El lugar perfecto para capturar imágenes épicas.</li>
                    </ul>
                    
                    <h3>🎯 Qué Hacer</h3>
                    <ul>
                        <li><strong>Fotografía de paisajes:</strong> Captura vistas únicas y espectaculares.</li>
                        <li><strong>Observación al amanecer:</strong> Llega temprano para ver el sol salir.</li>
                        <li><strong>Atardecer romántico:</strong> Disfruta de los colores del cielo al caer la tarde.</li>
                        <li><strong>Picnic con vista:</strong> Lleva tu almuerzo y disfrútalo con la mejor vista.</li>
                        <li><strong>Meditación:</strong> El lugar ideal para conectar contigo mismo.</li>
                        <li><strong>Avistamiento de aves:</strong> Observa cóndores y otras aves rapaces.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/mirador.jpg" alt="Vista desde el Mirador">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>🌅</span>
                            <p><strong>Horario:</strong> Llega temprano para el amanecer o quédate al atardecer.</p>
                        </div>
                        <div class="consejo-item">
                            <span>📷</span>
                            <p><strong>Equipo:</strong> Lleva cámara, trípode y baterías extra.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🧥</span>
                            <p><strong>Ropa:</strong> Abrígate bien, hace frío en las alturas.</p>
                        </div>
                        <div class="consejo-item">
                            <span>💧</span>
                            <p><strong>Hidratación:</strong> Lleva agua y snacks para tu visita.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Altitud:</strong> 3,900 msnm</p>
                            <p><strong>Acceso:</strong> Caminata de 30 min</p>
                            <p><strong>Mejor hora:</strong> 5:30 AM o 5:00 PM</p>
                            <p><strong>Mejor época:</strong> Abril - Octubre</p>
                            <p><strong>Duración:</strong> 2-3 horas</p>
                            <p><strong>Entrada:</strong> Libre</p>
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
                            <li><a href="acobamba.php">Acobamba</a></li>
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