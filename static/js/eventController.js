$("#crearEvento").click(function ajax(){
    let nombre=$("#nombreCrear").val();
    let ubicacion=$("#ubicacionCrear").val();
    let fecha=$("#fechaCrear").val();
    let informacion=$("#informacionCrear").val();
        $.ajax({
            type:"POST",
            url: "../controller/EventController.php",
            dataType:"text",
            data: {
                // comprobar que los valores no sean nulos
                "Crear":"",
                "nombre":nombre, 
                "ubicacion":ubicacion, 
                "fecha":fecha, 
                "informacion":informacion
            },
            success:function(res){
                res=JSON.parse(res)
                console.log(res.message);
                $(".respuesta").html(res.message);
                
                $("#actualizarEvento").show();
                $("#buscarEvento").show();
                $("#crearEvento").show();
                $("#eliminarEvento").show();

                $(".actualizar").show();
                $(".crear").show();
                $(".buscar_eliminar").show();
                $(".enviarFormulario").show();

                $(".formulario").hide();
                $(".botones").show();
            }
        })
})
$("#actualizarEvento").click(function ajax(){
    let nombre=$("#nombreActualizar").val();
    let nombreNuevo=$("#nombreNuevo").val();
    let ubicacion=$("#ubicacionActualizar").val();
    let fecha=$("#fechaActualizar").val();
    let informacion=$("#informacionActualizar").val();
        $.ajax({
            type:"POST",
            url: "../controller/EventController.php",
            dataType:"text",
            data: {
                // comprobar que los valores no sean nulos
                "Actualizar":"",
                "nombre":nombre, 
                "nombreNuevo":nombreNuevo,
                "ubicacion":ubicacion, 
                "fecha":fecha, 
                "informacion":informacion
            },
            success:function(res){
                res=JSON.parse(res)
                console.log(res.message);
                $(".respuesta").html(res.message);
                
                $("#actualizarEvento").show();
                $("#buscarEvento").show();
                $("#crearEvento").show();
                $("#eliminarEvento").show();

                $(".actualizar").show();
                $(".crear").show();
                $(".buscar_eliminar").show();
                $(".enviarFormulario").show();

                $(".formulario").hide();
                $(".botones").show();
            }
        })
})
$("#buscarEvento").click(function ajax(){
    let nombre=$("#nombreBuscarEliminar").val();
    $.ajax({
        type:"POST",
        url: "../controller/EventController.php",
        dataType:"text",
        data: {
            // comprobar que los valores no sean nulos
            "Buscar":"",
            "nombre":nombre, 
        },
        success:function(res){
            res=JSON.parse(res)
            console.log(res.message);
            $(".respuesta").html(res.message);
            
            $("#actualizarEvento").show();
            $("#buscarEvento").show();
            $("#crearEvento").show();
            $("#eliminarEvento").show();

            $(".actualizar").show();
            $(".crear").show();
            $(".buscar_eliminar").show();
            $(".enviarFormulario").show();

            $(".formulario").hide();
            $(".botones").show();
        }
    })
    
})
$("#eliminarEvento").click(function ajax(){
    let nombre=$("#nombreBuscarEliminar").val();
    $.ajax({
        type:"POST",
        url: "TheFightersParadise/controller/EventController.php",
        dataType:"text",
        data: {
            // comprobar que los valores no sean nulos
            "Eliminar":"",
            "nombre":nombre, 
        },
        success:function(res){
            res=JSON.parse(res)
            console.log(res.message);
            $(".respuesta").html(res.message);
            
            $("#actualizarEvento").show();
            $("#buscarEvento").show();
            $("#crearEvento").show();
            $("#eliminarEvento").show();

            $(".actualizar").show();
            $(".crear").show();
            $(".buscar_eliminar").show();
            $(".enviarFormulario").show();

            $(".formulario").hide();
            $(".botones").show();
        }
    })
})