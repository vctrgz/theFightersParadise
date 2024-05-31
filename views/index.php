<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    
    <link rel="stylesheet" href="../static/css/menu.css">
    <link rel="stylesheet" href="../static/css/estilosPredeterminados.css">
    <link rel="stylesheet" href="../static/js/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="../static/js/slick-1.8.1/slick/slick-theme.css">

    <script src="../static/js/navbar.js" defer></script>
    <script src="../static/js/menu.js" defer></script>
    <script src="../static/js/eventController.js" defer></script>
    <script src="../static/js/eventForm.js"></script>
    
</head>
<body>

    <?php require "../partials/navbar.php" ?>

    <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true && $_SESSION['user']["promotor"]) : ?>
        

    <section style="margin-top: 200px" class="events">
        <h1>Eventos:<br><br><br></h1>
        <div>            
            <div class="botones">
                <button id="mostrarFormularioCrearEvento">CREAR EVENTO<br></button>
                <button id="mostrarFormularioActualizarEvento">ACTUALIZAR EVENTO<br></button>
                <button id="mostrarFormularioBuscarEvento">BUSCAR EVENTO<br></button>
                <button id="mostrarFormularioEliminarEvento">ELIMINAR EVENTO<br></button>
            </div>
            <br><form action="/THEFIGHTERSPARADISE/controller/EventController.php" method="POST" class="formulario">
                <div class="crear">
                    <div class="pregunta1">
                        <label>
                            Nombre: 
                        </label>
                        <input type="text" name="nombre" id="nombreCrear">
                    </div>
                    <div class="pregunta2">
                        <label>
                        <br> Ubicacion:
                        </label>
                        <input type="text" name="ubicacion" id="ubicacionCrear">
                    </div>
                    <div class="pregunta3">
                        <label>
                            <br>Fecha: 
                        </label>
                        <input type="date" name="fecha" id="fechaCrear">
                    </div>
                    <div class="pregunta4">
                        <label>
                            <br>Informacion: 
                        </label>
                        <input type="text" name="informacion" id="informacionCrear">
                    </div>
                </div>

                <div class="actualizar">
                    <div class="pregunta1">
                        <label>
                            Nombre del evento que desea actualizar: 
                        </label>
                        <input type="text" name="nombre" id="nombreActualizar">
                    </div>
                    <div class="pregunta5">
                        <label>
                            <br> Nuevo Nombre:
                        </label>
                        <input type="text" name="nombreNuevo" id="nombreNuevo">
                    </div>
                    <div class="pregunta2">
                        <label>
                        <br> Ubicacion:
                        </label>
                        <input type="text" name="ubicacion" id="ubicacionActualizar">
                    </div>
                    <div class="pregunta3">
                        <label>
                            <br>Fecha: 
                        </label>
                        <input type="date" name="fecha" id="fechaActualizar">
                    </div>
                    <div class="pregunta4">
                        <label>
                            <br>Informacion: 
                        </label>
                        <input type="text" name="informacion" id="informacionActualizar">
                    </div>
                </div>

                <div class="buscar_eliminar">
                <div class="pregunta1">
                        <label>
                            Nombre: 
                        </label>
                        <input type="text" name="nombre" id="nombreBuscarEliminar">
                    </div>
                </div>

                <br><div class="enviarFormulario">
                    <input type="button" value="Crear" name="Crear" id="crearEvento">
                    <input type="button" value="Actualizar" name="Actualizar" id="actualizarEvento">
                    <input type="button" value="Buscar" name="Buscar" id="buscarEvento">
                    <input type="button" value="Eliminiar" name="Eliminar" id="eliminarEvento">
                </div>
            </form>
        </div>
        <div class="respuesta">

        </div>
    </section>

    <?php else : ?>

        <section class="events">
        <h1>Eventos:</h1>
        <div class="sliderEvents">
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
            <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
            <div class="event">
                <img src="../static/images/event.png" alt="">
            </div>
        </div>
    </section>
    <section class="events">
        <h1>Novedades de nuestras marcas:</h1>
        <div class="sliderProducts">
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
            <div class="product">
                <img src="../static/images/product.jpg" alt="">
            </div>
        </div>
    </section>

    <?php endif; ?>

    
</body>
</html>