<?php
// menu.php
?>
<header class="header">
    <div class="container-header">
        <div class="logo">
            <a href="index.php">Turismo Acobamba</a>
        </div>
        <nav class="nav">
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li class="menu-destinos">
                    <a href="destino.php">Destinos</a>
                    <ul class="submenu">
                        <li><a href="acobamba.php">Acobamba</a></li>
                        <li><a href="artesania.php">Artesanía</a></li>
                        <li><a href="catedral.php">Catedral</a></li>
                        <li><a href="ccaccasiri.php">Ccaccasiri</a></li>
                        <li><a href="choclococha.php">Choclococha</a></li>
                        <li><a href="mirador.php">Mirador</a></li>
                        <li><a href="ruinas.php">Ruinas</a></li>
                    </ul>
                </li>
                <li><a href="gracias.html">Acerca de</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu');
    const menu = document.querySelector('.menu');
    
    if(menuToggle) {
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    }
});
</script>