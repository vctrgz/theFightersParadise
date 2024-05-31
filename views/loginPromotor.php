<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Promotores</title>
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/TheFightersParadise/static/css/login.css">
    <script src="../static/js/loginPromotor.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="../controller/UserController.php" method="post" class="sign-in-form">
                    <h2 class="title">Regístrate como promotor</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo Electronico" name="email"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-city"></i>
                        <input type="text" placeholder="Ciudad" name="city"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="password"/>
                    </div>
                    <input type="submit" class="btn" value="Regístrate" name="registerPromotor"/>
                    <!-- <p class="social-text">O inicia sesión con google</p>
                    <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    </div> -->
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                <h3>¿No eres Promotor?</h3>
                <p>
                    Vuelve al inicio de sesión estandar clicando en este botón y prueba a registrarte o iniciar sesión como usuario
                </p>
                <button class="btn transparent" id="sign-up-promotor-btn" onclick="animateCircleAndRedirect()">
                Vuelve al login
                </button>
                </div>
                <div class="circle" id="animation-circle"></div>
                <img src=" " class="image" alt="" />
            </div>
            </div>
        </div>

    </div>
</body>
</html>
