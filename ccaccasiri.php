<?php
// ccaccasiri.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ccaccasiri - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/ccaccasiri.jpg');">
        <div class="hero-overlay">
            <h1>Ccaccasiri</h1>
            <p>Paisajes andinos y cultura viva</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre Ccaccasiri</h2>
                    <p>Ccaccasiri es una comunidad andina que preserva sus tradiciones ancestrales y modo de vida tradicional. Ubicada en las alturas de los Andes, este destino ofrece una experiencia auténtica de turismo vivencial donde los visitantes pueden sumergirse en la cultura local.</p>
                    
                    <p>Las comunidades de Ccaccasiri mantienen vivas sus costumbres, desde la agricultura tradicional hasta las celebraciones festivas. Los pobladores comparten con orgullo su forma de vida, permitiendo a los turistas experimentar la verdadera esencia de la vida andina.</p>
                    
                    <h3>🏔️ Atractivos Principales</h3>
                    <ul>
                        <li><strong>Comunidad tradicional:</strong> Familias que conservan sus costumbres ancestrales.</li>
                        <li><strong>Agricultura andina:</strong> Terrazas agrícolas y cultivos tradicionales.</li>
                        <li><strong>Textilería local:</strong> Mujeres tejedoras que crean textiles con técnicas antiguas.</li>
                        <li><strong>Paisajes naturales:</strong> Montañas, valles y ecosistemas de altura únicos.</li>
                        <li><strong>Ganadería de camélidos:</strong> Crianza de alpacas y llamas.</li>
                    </ul>
                    
                    <h3>🎯 Experiencias Vivenciales</h3>
                    <ul>
                        <li><strong>Homestay familiar:</strong> Hospedaje en casas de familias locales.</li>
                        <li><strong>Participación agrícola:</strong> Ayuda en labores del campo y cosecha.</li>
                        <li><strong>Aprendizaje textil:</strong> Clases de tejido tradicional en telar.</li>
                        <li><strong>Gastronomía andina:</strong> Preparación de platos típicos con productos locales.</li>
                        <li><strong>Ceremonias tradicionales:</strong> Participa en rituales y festividades.</li>
                        <li><strong>Caminatas guiadas:</strong> Explora los alrededores con guías locales.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/ccaccasiri.jpg" alt="Comunidad Ccaccasiri">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>🤝</span>
                            <p><strong>Respeto cultural:</strong> Respeta las costumbres y tradiciones locales.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🎁</span>
                            <p><strong>Intercambio:</strong> Lleva pequeños obsequios para las familias.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🗣️</span>
                            <p><strong>Idioma:</strong> Aprende algunas palabras básicas en Quechua.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🧥</span>
                            <p><strong>Clima:</strong> Prepárate para temperaturas bajas en la noche.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Altitud:</strong> 3,800 msnm</p>
                            <p><strong>Tipo:</strong> Turismo vivencial</p>
                            <p><strong>Idioma:</strong> Quechua y Español</p>
                            <p><strong>Mejor época:</strong> Abril - Octubre</p>
                            <p><strong>Duración:</strong> 2-4 días</p>
                            <p><strong>Hospedaje:</strong> Casas familiares</p>
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
                            <li><a href="acobamba.php">Acobamba</a></li>
                            <li><a href="artesania.php">Artesanía</a></li>
                            <li><a href="choclococha.php">Choclococha</a></li>
                            <li><a href="mirador.php">Mirador</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>