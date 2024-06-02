$(".sign-in-form").validate({
    focusCleanUp: true,
    rules:{
        usernameLogin:{
            required: true,
            minlength: 3,
            maxlength: 12
        },
        passwordLogin:{
            required: true,
            minlength: 8,
            maxlength: 20
        }
    },
    messages:{
        usernameLogin:{
            required: "<br>Campo obligatorio</br>",
            minlength: "El nombre de usuario debe contener mas de 3 carácteres",
            maxlength: "El nombre de usuario debe contener menos de 12 carácteres"
        },
        passwordLogin:{
            required: "<br>Campo obligatorio</br>",
            minlength: "Minimo 8 carácteres",
            maxlength: "Maximo 20 carácteres"
        } 
    }

})
$(".sign-up-form").validate({
    focusCleanUp: true,
    rules:{
        usernameRegister:{
            required: true,
            minlength: 3,
            maxlength: 12
        },
        passwordRegister:{
            required: true,
            minlength: 3,
            maxlength: 20

        },
        emailRegister:{
            required: true
        }
    },
    messages:{
        usernameRegister:{
            required: "<br>Campo obligatorio</br>",
            minlength: "El nombre de usuario debe contener mas de 3 carácteres",
            maxlength: "El nombre de usuario debe contener menos de 12 carácteres"
        },
        passwordRegister:{
            required: "<br>Campo obligatorio</br>",
            minlength: "Minimo 3 carácteres",
            maxlength: "Maximo 20 carácteres",
            pattern: "La contraseña debe contener al menos una mayúscula, una minúscula, un número y un carácter especial"
        },
        emailRegister:{
            required: "<br>Campo obligatorio</br>",
            pattern: "Direccion de correo electronico invalida"

        } 
    }
    
})

$(document).ready(function() {
    $(".userModifier").validate({
        focusCleanUp: true,
        rules:{
            newUsername:{
                required: true,
                minlength: 3,
                maxlength: 12
            },
            newPassword:{
                required: true,
                minlength: 3,
                maxlength: 20

            },
            newEmail:{
                required: true
            }
        },
        messages:{
            newUsername:{
                required: "<br>Campo obligatorio</br>",
                minlength: "El nombre de usuario debe contener mas de 3 carácteres",
                maxlength: "El nombre de usuario debe contener menos de 12 carácteres"
            },
            newPassword:{
                required: "<br>Campo obligatorio</br>",
                minlength: "Minimo 3 carácteres",
                maxlength: "Maximo 20 carácteres",
                pattern: "La contraseña debe contener al menos una mayúscula, una minúscula, un número y un carácter especial"
            },
            newEmail:{
                required: "<br>Campo obligatorio</br>",
                pattern: "Direccion de correo electronico invalida"

            } 
        },
        
    });
});
