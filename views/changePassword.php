<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../static/js/jQueryLibrary.js"></script>
    <script src="../static/js/dist/jquery.validate.min.js"></script>
    <script src="../static/js/dist/additional-methods.min.js"></script>
    <script src="../static/js/validate.js" defer></script>
</head>
<body>
    <form action="/TheFightersParadise/controller/UserController.php" method="post" class="userModifier">

    <h2>
            Cambiar contraseña
        </h2>
        <input type="text" name="oldPassword" placeholder="">

        <h2>
            Cambiar contraseña
        </h2>
        <input type="password" name="newPassword" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,&lt;.>]).*$" placeholder="Contraseña">
    </form>
</body>
</html>