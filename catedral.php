<?php
// catedral.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral - Turismo Perú</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <section class="destino-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/catedral.jpg');">
        <div class="hero-overlay">
            <h1>Catedral</h1>
            <p>Historia y arquitectura colonial impresionante</p>
        </div>
    </section>
    
    <section class="destino-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content">
                    <h2>Sobre la Catedral</h2>
                    <p>La Catedral es un monumento histórico de gran importancia que representa la arquitectura colonial peruana. Con siglos de historia, este majestuoso edificio ha sido testigo de eventos históricos cruciales y continúa siendo un símbolo de la herencia cultural del Perú.</p>
                    
                    <p>Su construcción combina elementos arquitectónicos europeos con influencias locales, creando un estilo único que la distingue. Los visitantes pueden apreciar sus imponentes fachadas, altares dorados y obras de arte religioso de gran valor histórico.</p>
                    
                    <h3>🏛️ Atractivos Principales</h3>
                    <ul>
                        <li><strong>Arquitectura colonial:</strong> Impresionante diseño con influencias barrocas y renacentistas.</li>
                        <li><strong>Arte religioso:</strong> Colección de pinturas de la escuela cusqueña y retablos coloniales.</li>
                        <li><strong>Altares dorados:</strong> Elaboradas estructuras recubiertas en pan de oro.</li>
                        <li><strong>Criptas históricas:</strong> Lugares de descanso de importantes figuras históricas.</li>
                    </ul>
                    
                    <h3>🎯 Qué Ver y Hacer</h3>
                    <ul>
                        <li><strong>Visita guiada:</strong> Recorrido explicativo por las diferentes capillas y espacios.</li>
                        <li><strong>Museo religioso:</strong> Colección de arte sacro y vestimentas litúrgicas antiguas.</li>
                        <li><strong>Fotografía arquitectónica:</strong> Captura los detalles únicos de la fachada y el interior.</li>
                        <li><strong>Eventos religiosos:</strong> Participa en ceremonias y festividades tradicionales.</li>
                        <li><strong>Tour nocturno:</strong> Experimenta la catedral iluminada por la noche.</li>
                    </ul>
                    
                    <h3>📸 Galería</h3>
                    <div class="gallery">
                        <img src="img/catedral.jpg" alt="Vista de la Catedral">
                    </div>
                    
                    <h3>💡 Consejos para tu Visita</h3>
                    <div class="consejos">
                        <div class="consejo-item">
                            <span>👕</span>
                            <p><strong>Vestimenta:</strong> Se recomienda ropa apropiada y respetuosa.</p>
                        </div>
                        <div class="consejo-item">
                            <span>📷</span>
                            <p><strong>Fotografías:</strong> Consulta las áreas donde está permitido fotografiar.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🕐</span>
                            <p><strong>Horarios:</strong> Verifica los horarios de apertura y ceremonias.</p>
                        </div>
                        <div class="consejo-item">
                            <span>🎫</span>
                            <p><strong>Entradas:</strong> Adquiere tu boleto con anticipación.</p>
                        </div>
                    </div>
                </div>
                
                <aside class="sidebar">
                    <div class="info-box">
                        <h3>📋 Información Práctica</h3>
                        <div class="info-detalle">
                            <p><strong>Estilo:</strong> Colonial barroco</p>
                            <p><strong>Construcción:</strong> Siglo XVI-XVIII</p>
                            <p><strong>Horario:</strong> 9:00 AM - 5:00 PM</p>
                            <p><strong>Mejor época:</strong> Todo el año</p>
                            <p><strong>Duración:</strong> 1-2 horas</p>
                            <p><strong>Entrada:</strong> Consultar precios</p>
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
                            <li><a href="ruinas.php">Ruinas</a></li>
                            <li><a href="artesania.php">Artesanía</a></li>
                            <li><a href="acobamba.php">Acobamba</a></li>
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