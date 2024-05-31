<?php 
session_start();

var_dump($_SESSION["user"]);

if (isset($_SESSION['logged']) && $_SESSION["logged"] === false) {
    header("Location /TheFightersParadise/views/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de perfil</title>
    <link rel="stylesheet" href="../static/css/estilosPredeterminados.css">
    <link rel="stylesheet" href="../static/css/perfil.css">
    
</head>
<body>

<div id="message"></div>

    <?php require "../partials/navbar.php" ?>

        <div class="columna_usuario">
            <img id="foto_usuario" src="<?= $_SESSION["user"]["userImage"] ?>" alt="Foto Usuario">
            <h3 class="TituloUsuario">Usuario</h3><br>
            <div class="infoUsuario">
                <a><b>Información del Usuario:</b> <?= $_SESSION['user']['username']?><br>
                <?= $_SESSION['user']['email']?> <br> <?= $_SESSION['user']['ciudad']?><br>
                <b>Tipo de usuario:</b><br>
                <?php if ($_SESSION["user"]["promotor"]) : ?>
                    Promotor
                <?php else : ?>
                    Usuario
                <?php endif ?>
                </a>
            </div>
        <div class="modifiers">
            <form action="/TheFightersParadise/controller/UserController.php" method="post">
                <input type="submit" value="Modificar información" name="editUser" style="border: none; background-color: transparent;"><br> 
                <input type="submit" value="Cerrar Sesión" name="logout" style="border: none; background-color: transparent;"/>
            </form>
        </div>
        </div>
        <div class="adquiridos">
            <div class="tituloAdquiridos">
                <h2>PRODUCTOS ADQUIRIDOS </h2>
            </div>
            
            <div class="productos">
                <p>PRODUCTO 1</p>
                <img src="" alt="imagen producto 1">
            </div>
            <div class="productos">
                <p>PRODUCTO 2</p>
                <img src="" alt="imagen producto 2">
            </div>
        </div>
        
    <script src="script.js"></script>
</body>
</html>