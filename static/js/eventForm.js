
        // CREAR IMAGENES DE EVENTOS
        // CSS EN VALIDATE E INDICE
        function esconderFormulario() {
            $(".botones").hide();
        };
        $(document).ready( function(){
            $(".formulario").hide();
            $("#mostrarFormularioCrearEvento").click(
                function(){
                    esconderFormulario();
                     $(".formulario").show();
                     $(".enviarFormulario").show();
                     $(".actualizar").hide();
                     $(".buscar_eliminar").hide();

                     $("#actualizarEvento").hide();
                     $("#buscarEvento").hide();
                     $("#eliminarEvento").hide();

                     $(".respuesta").html("");
                }
            )
            $("#mostrarFormularioActualizarEvento").click(
                function(){
                    esconderFormulario();
                     $(".formulario").show();
                     $(".crear").hide();
                     $(".buscar_eliminar").hide();

                     $("#crearEvento").hide();
                     $("#buscarEvento").hide();
                     $("#eliminarEvento").hide();

                     $(".respuesta").html("");
                }
            )
            $("#mostrarFormularioBuscarEvento").click(
                function(){
                    esconderFormulario();
                     $(".formulario").show();
                     $(".actualizar").hide();
                     $(".crear").hide();

                     $("#actualizarEvento").hide();
                     $("#crearEvento").hide();
                     $("#eliminarEvento").hide();

                     $(".respuesta").html("");
                }
            )
            $("#mostrarFormularioEliminarEvento").click(
                function(){
                    esconderFormulario();
                     $(".formulario").show();
                     $(".actualizar").hide();
                     $(".crear").hide();

                     $("#actualizarEvento").hide();
                     $("#buscarEvento").hide();
                     $("#crearEvento").hide();

                     $(".respuesta").html("");
                }
               
            )
        }
        
        )
