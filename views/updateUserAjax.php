<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION["logged"] === false) {
    header("Location /TheFightersParadise/views/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../static/css/menu.css">
    <link rel="stylesheet" href="../static/css/estilosPredeterminados.css">
    <link rel="stylesheet" href="../static/css/updateUser.css">
    

    <script src="../static/js/jQueryLibrary.js"></script>
    <script src="../static/js/dist/jquery.validate.min.js"></script>
    <script src="../static/js/dist/additional-methods.min.js"></script>
    <script src="../static/js/checkmessages.js" defer></script>
</head>
<body>
    <div class="formBody">
        <form action="/TheFightersParadise/controller/controllerUserAjax.php" method="post" class="userModifier">
            <div id="message"></div>
            <img id="foto_usuario" src="<?= $_SESSION["user"]["userImage"] ?>" alt="Foto Usuario">
            <h2>
                Modificar usuario con AJAX
            </h2>
    
            <input type="hidden" name="userId" value="<?= $_SESSION["user"]['id']; ?>" id="userId">
            Nombre de usuario: 
            <input type="text" name="newUsername" value="<?= $_SESSION["user"]["username"]?>" id="newUsernameInput"><br>
            Correo Electronico: 
            <input type="text" name="newEmail" value="<?= $_SESSION["user"]["email"]?>" id="newEmail"><br>
            Ciudad: 
            <input type="text" name="newCity" value="<?= $_SESSION["user"]["ciudad"]?>" id="newCity"><br>
            Contraseña: 
            <input type="password" name="newPassword" value="<?= $_SESSION["user"]["password"]?>" id="newPassword"><br>
            <input type="submit" class="btn" value="Volver a Perfil" name="backToProfile" id="backToProfile">
        </form>
        <button id="updateAjax">updateAjax</button>
    </div>
</body>
</html>