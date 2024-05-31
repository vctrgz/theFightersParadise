<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/css/login.css">

    <script src="../static/js/cookies.js"" defer></script>
    <script src="../static/js/login.js" defer></script>
    <script src="../static/js/validate.js" defer></script>


    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/TheFightersParadise/controller/UserController.php" method="post" class="sign-in-form">
            <h2 class="title">Inicia sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de usuario" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="password"/>
            </div>
            <input type="submit" value="Inicia sesión" name="login" class="btn solid"/>
            <!-- <p class="social-text">O inicia sesión con google</p>
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div> -->
          </form>

          <form action="/TheFightersParadise/controller/UserController.php" method="post" class="sign-up-form">  
          <h2 class="title">Regístrate</h2>
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
            <input type="submit" class="btn" value="Regístrate" name="register" />
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
            <h3>Nuevo aqui?</h3>
            <p>
              Registrate en The Fighter's Paradise para poder disfrutar de los mejores eventos de toda España
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Regístrate
            </button>
            <button class="btn transparent promotorRegister" id="sign-up-promotor-btn" onclick="animateCircleAndRedirect()">
              Regístrate como promotor 
            </button>
          </div>
          <div class="circle" id="animation-circle"></div>
          <img src=" " class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya eres uno de los nuestros?
            </h3>
            <p>
              Inicia sesión en The Fighter's Paradise para poder disfrutar de los mejores eventos de toda España
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicia sesión
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>

    <div id="cajaCookies">
      <h1>AVISO DE COOKIES</h1>
      <p><button onclick="aceptarCookies()">Aceptar y cerrar este mensaje</button>Este sitio web usa cookies, si permaneces aquí aceptas su uso.
      Puedes leer mas sobre el uso de cookies en nuestra <a href="privacidad.php">politica de privacidad</a></p>
    </div> 

  </body>
</html>