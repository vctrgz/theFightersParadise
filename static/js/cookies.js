// Esta función comprueba si el usuario ha aceptado las cookies y oculta la caja de cookies si es así.
function compruebaAceptaCookies() {
    if (localStorage.aceptaCookies === 'true') {
        cajaCookies.style.display = 'none';
    }
}

// Esta función se llama cuando el usuario hace clic en el botón de aceptar cookies.
function aceptarCookies() {
    // Establece el valor de aceptaCookies en 'true' en el localStorage.
    localStorage.aceptaCookies = 'true';
    // Oculta la caja de cookies.
    cajaCookies.style.display = 'none';
}

// Esto se ejecuta cuando el documento HTML está completamente cargado y listo.
$(document).ready(function() {
    // Llama a la función compruebaAceptaCookies para comprobar si el usuario ha aceptado las cookies.
    compruebaAceptaCookies();
});

// Esto también se ejecuta cuando el documento HTML está completamente cargado.
$(document).ready(function() {
    // Define la función compruebaAceptaCookies dentro de este ámbito.
    function compruebaAceptaCookies() {
        // Comprueba si el usuario ha aceptado las cookies en localStorage.
        if (localStorage.aceptaCookies === 'true') {
            // Si ha aceptado las cookies, oculta la caja de cookies y muestra los elementos relevantes.
            ocultarMostrarElementos(true);
        } else {
            // Si no ha aceptado las cookies, muestra el mensaje de cookies.
            mostrarMensajeCookies();
        }
    }

    // Muestra la caja de cookies y oculta otros elementos.
    function mostrarMensajeCookies() {
        $('#cajaCookies').show();
        $('#login-btn').hide();
        $('#mostrar-mensaje-btn').show();
    }

    // Oculta la caja de cookies y muestra otros elementos.
    function ocultarMostrarElementos(aceptaCookies) {
        if (aceptaCookies) {
            $('#cajaCookies').hide();
            $('#login-btn').show();
            $('#mostrar-mensaje-btn').hide();
        }
    }

    // Función que se llama cuando el usuario acepta las cookies.
    function aceptarCookies() {
        // Establece el valor de aceptaCookies en 'true' en localStorage.
        localStorage.aceptaCookies = 'true';
        // Llama a la función ocultarMostrarElementos para mostrar los elementos relevantes.
        ocultarMostrarElementos(true);
    }

    // Manejador de eventos para el botón de aceptar cookies.
    $('#aceptar-cookies-btn').click(function() {
        // Llama a la función aceptarCookies cuando se hace clic en el botón.
        aceptarCookies();
    });

    // Manejador de eventos para el botón de mostrar mensaje.
    $('#mostrar-mensaje-btn').click(function() {
        // Muestra el mensaje de cookies cuando se hace clic en el botón.
        mostrarMensajeCookies();
    });

    // Llama a la función compruebaAceptaCookies para comprobar si el usuario ha aceptado las cookies.
    compruebaAceptaCookies();
});