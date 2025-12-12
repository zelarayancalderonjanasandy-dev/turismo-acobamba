<?php
// artesania.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesanía - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/artesania.jpg');">
        <div class="hero-overlay">
            <h1>Artesanía Peruana</h1>
            <p>Descubre el arte y tradición de nuestros artesanos</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Artesanía Tradicional</h2>
                    <p>La artesanía peruana es una expresión viva de nuestra cultura milenaria. Cada pieza cuenta una historia, transmitida de generación en generación, reflejando la riqueza cultural de nuestras comunidades andinas.</p>
                    
                    <p>Los artesanos peruanos combinan técnicas ancestrales con creatividad contemporánea, creando obras únicas que van desde textiles coloridos hasta cerámica decorativa, joyería en plata y madera tallada.</p>
                    
                    <h3>🎨 Tipos de Artesanía</h3>
                    <ul>
                        <li><strong>Textilería andina:</strong> Tejidos en telar con diseños tradicionales y colores naturales.</li>
                        <li><strong>Cerámica:</strong> Vasijas, platos y figuras decorativas con técnicas precolombinas.</li>
                        <li><strong>Platería:</strong> Joyería en plata con diseños inspirados en la naturaleza.</li>
                        <li><strong>Tallado en madera:</strong> Máscaras, retablos y figuras religiosas.</li>
                        <li><strong>Mates burilados:</strong> Calabazas decoradas con intrincados diseños tallados.</li>
                    </ul>
                    
                    <h3>🎯 Experiencias Disponibles</h3>
                    <ul>
                        <li><strong>Talleres vivenciales:</strong> Aprende técnicas tradicionales directamente de los artesanos.</li>
                        <li><strong>Mercados artesanales:</strong> Explora ferias locales con productos auténticos.</li>
                        <li><strong>Visitas a talleres:</strong> Observa el proceso creativo desde el inicio.</li>
                        <li><strong>Demostraciones en vivo:</strong> Mira a los maestros artesanos trabajar.</li>
                        <li><strong>Compra directa:</strong> Adquiere piezas únicas apoyando a las comunidades.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/artesania.jpg" alt="Artesanía peruana">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>💰</span>
                            <p><strong>Efectivo:</strong> Lleva dinero en efectivo para tus compras.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🤝</span>
                            <p><strong>Regateo:</strong> Está permitido negociar con respeto.</p>
                        </div>
                        <div class="consejo-item">
                            <span>✅</span>
                            <p><strong>Autenticidad:</strong> Verifica que sean productos genuinos.</p>
                        </div>
                        <div class="consejo-item">
                            <span>📦</span>
                            <p><strong>Embalaje:</strong> Solicita un buen empaque para transportar.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Tipo:</strong> Cultural - Artesanal</p>
                            <p><strong>Ubicación:</strong> Mercados locales</p>
                            <p><strong>Horario:</strong> 8:00 AM - 6:00 PM</p>
                            <p><strong>Mejor época:</strong> Todo el año</p>
                            <p><strong>Duración:</strong> 2-4 horas</p>
                            <p><strong>Idiomas:</strong> Español, Quechua</p>
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
                            <li><a href="ccaccasiri.php">Ccaccasiri</a></li>
                            <li><a href="catedral.php">Catedral</a></li>
                            <li><a href="acobamba.php">Acobamba</a></li>
                            <li><a href="choclococha.php">Choclococha</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>