<header>
    <nav class="navbar">
        <a href="/TheFightersParadise/views/index.php" class="logo">
            <img src="/TheFightersParadise/static/images/LogoFighters.svg" alt="">
        </a>
        <div class="nav-links">

        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) : ?>
            <ul>
                <li><a href="/TheFightersParadise/views/index.php">INICIO</a></li>
                <li><a href="/TheFightersParadise/views/perfil.php">PERFIL</a></li>
                <li><a href="/TheFightersParadise/views/cesta.php">CESTA</a></li>             
            </ul>
        

        <?php else : ?>
            <ul>
                <li><a href="/TheFightersParadise/views/index.php">INICIO</a></li>
                <li><a href="/TheFightersParadise/views/login.php">LOGIN</a></li>
                <li><a href="/TheFightersParadise/views/perfil.php">Perfil</a></li>             
            </ul>
            <?php endif; ?>
        </div>
        <!-- <img src="/TheFightersParadise/static/images/menu-btn.png" alt="menu hamburger" class="menu-hamburger"> -->
        <img src="/TheFightersParadise/static/images/menu-btn.svg" alt="" class="menu-hamburger">
    </nav>
</header>
