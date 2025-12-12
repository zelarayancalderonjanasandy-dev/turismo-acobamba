<?php
// footer.php
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h4>Turismo Perú</h4>
                <p>Descubre la magia del Perú con nosotros. Tours personalizados y experiencias inolvidables.</p>
            </div>
            
            <div class="footer-column">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="destino.php">Destinos</a></li>
                    <li><a href="gracias.html">Acerca de</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4>Destinos</h4>
                <ul>
                    <?php
                    $destinos_footer = ['Acobamba', 'Catedral', 'Choclococha', 'Mirador', 'Ruinas'];
                    foreach($destinos_footer as $dest) {
                        $link = strtolower($dest) . '.php';
                        echo '<li><a href="' . $link . '">' . $dest . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4>Contacto</h4>
                <ul>
                    <li>📱 +51 980 479 052</li>
                    <li>📧 info@turismoperu.com</li>
                    <li>📍 Lima, Perú</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Turismo Perú. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>