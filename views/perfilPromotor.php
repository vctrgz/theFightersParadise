<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de perfil</title>
    <link rel="stylesheet" href="../static/css/estilosPredeterminados.css">
    <link rel="stylesheet" href="../static/css/perfilPromotor.css">
    <script src="../../static/js/navbar.js" defer></script>
</head>
<body>

    <?php require "../partials/navbar.php" ?>

    <div class="columna_usuario">
        <img id="foto_usuario" src="../static/images/user-2-svgrepo-com.svg" alt="Foto Usuario">
        <h3 class="TituloUsuario">Usuario</h3><br>
        <div class="infoUsuario">
            <a><b>Información del Promotor:</b> Nombre Apellido SegApellido<br>
            correousuario@gmail.com <br> Ciudad</a>
        </div>
    </div>
    <div class="adquiridos">
        <div class="tituloAdquiridos">
            <h2>EVENTOS PROMOCIONADOS </h2>
        </div>
        
        <div class="eventos">
            <p>EVENTO 1</p>
            <img src="" alt="imagen evento 1">
        </div>
        <div class="eventos">
            <p>EVENTO 2</p>
            <img src="" alt="imagen evento 2">
        </div>
    </div>
        
</body>
</html>