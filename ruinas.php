<?php
// ruinas.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruinas - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/ruinas.jpg');">
        <div class="hero-overlay">
            <h1>Ruinas Arqueológicas</h1>
            <p>Historia ancestral y arqueología fascinante</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre las Ruinas</h2>
                    <p>Las ruinas arqueológicas representan el legado de antiguas civilizaciones que habitaron los Andes peruanos hace cientos de años. Estos sitios históricos son testimonio de la avanzada arquitectura, ingeniería y organización social de culturas precolombinas.</p>
                    
                    <p>Explorar estas ruinas es como viajar en el tiempo. Los muros de piedra, terrazas agrícolas y construcciones ceremoniales revelan la habilidad y conocimiento de nuestros antepasados. Cada piedra cuenta una historia de un pasado glorioso que merece ser conocido y preservado.</p>
                    
                    <h3>🏛️ Atractivos Principales</h3>
                    <ul>
                        <li><strong>Arquitectura precolombina:</strong> Construcciones en piedra con técnicas ancestrales.</li>
                        <li><strong>Terrazas agrícolas:</strong> Sistema de andenes que demuestran ingeniería avanzada.</li>
                        <li><strong>Plazas ceremoniales:</strong> Espacios utilizados para rituales y ceremonias importantes.</li>
                        <li><strong>Muros incas:</strong> Piedras perfectamente ensambladas sin argamasa.</li>
                        <li><strong>Arte rupestre:</strong> Petroglifos y pictografías en rocas cercanas.</li>
                    </ul>
                    
                    <h3>🎯 Qué Explorar</h3>
                    <ul>
                        <li><strong>Visita guiada:</strong> Aprende la historia con guías especializados en arqueología.</li>
                        <li><strong>Recorrido arqueológico:</strong> Explora cada sector del complejo histórico.</li>
                        <li><strong>Fotografía histórica:</strong> Captura detalles de la arquitectura antigua.</li>
                        <li><strong>Senderos incas:</strong> Camina por antiguos caminos que conectaban el imperio.</li>
                        <li><strong>Museo local:</strong> Observa artefactos encontrados en excavaciones.</li>
                        <li><strong>Investigación:</strong> Conoce proyectos arqueológicos en curso.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/ruinas.jpg" alt="Ruinas arqueológicas">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>👟</span>
                            <p><strong>Calzado:</strong> Usa zapatos cómodos para caminar por terreno irregular.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🎫</span>
                            <p><strong>Boleto:</strong> Compra tu entrada en la oficina del sitio arqueológico.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🚫</span>
                            <p><strong>Respeto:</strong> No toques ni dañes las estructuras históricas.</p>
                        </div>
                        <div class="consejo-item">
                            <span>👨‍🏫</span>
                            <p><strong>Guía:</strong> Contrata un guía oficial para mejor experiencia.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Periodo:</strong> Pre-Inca e Inca</p>
                            <p><strong>Antigüedad:</strong> 500-800 años</p>
                            <p><strong>Horario:</strong> 8:00 AM - 5:00 PM</p>
                            <p><strong>Mejor época:</strong> Mayo - Octubre</p>
                            <p><strong>Duración:</strong> 2-3 horas</p>
                            <p><strong>Entrada:</strong> S/ 10 - S/ 20</p>
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
                            <li><a href="catedral.php">Catedral</a></li>
                            <li><a href="mirador.php">Mirador</a></li>
                            <li><a href="choclococha.php">Choclococha</a></li>
                            <li><a href="acobamba.php">Acobamba</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>