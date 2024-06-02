$(document).ready(function() {
    $(".userModifier").validate({
        focusCleanUp: true,
        rules: {
            newUsername: {
                required: true,
                minlength: 3,
                maxlength: 12
            },
            newPassword: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            newEmail: {
                required: true,
                email: true
            }
        },
        messages: {
            newUsername: {
                required: "<br>Campo obligatorio</br>",
                minlength: "El nombre de usuario debe contener más de 3 carácteres",
                maxlength: "El nombre de usuario debe contener menos de 12 carácteres"
            },
            newPassword: {
                required: "<br>Campo obligatorio</br>",
                minlength: "Mínimo 3 carácteres",
                maxlength: "Máximo 20 carácteres"
            },
            newEmail: {
                required: "<br>Campo obligatorio</br>",
                email: "Dirección de correo electrónico inválida"
            }
        },
        invalidHandler: function(event, validator) {
            let errors = validator.numberOfInvalids();
            if (errors) {
                let message = "Please correct the errors before submission.";
                $("#message").html(message);
            }
        },
        submitHandler: function(form) {
            return false;
        }
    });

    $("#updateAjax").click(function(event) {
        event.preventDefault();

        if ($(".userModifier").valid()) {
            let userId = $("#userId").val();
            let newUsername = $("#newUsernameInput").val();
            let newEmail = $("#newEmail").val();
            let newPassword = $("#newPassword").val();
            let newCity = $("#newCity").val();

            $.ajax({
                type: "POST",
                url: "/TheFightersParadise/controller/controllerUserAjax.php",
                dataType: "json",
                data: {
                    userId: userId,
                    newUsername: newUsername,
                    newEmail: newEmail,
                    newPassword: newPassword,
                    newCity: newCity
                },
                success: function(resp) {
                    $("#message").html(resp.message);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + " " + error);
                    $("#message").html("An error occurred while processing your request.");
                    console.log(xhr.responseText);
                }
            });
        } else {
            let message = "Please correct the errors before submission.";
            $("#message").html(message);
        }
    });
    $("#backToProfile").click(function(event) {
        event.preventDefault(); 

        window.location.href = "/TheFightersParadise/views/perfil.php";
    });
});