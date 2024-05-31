$("#updateAjax").click(function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    let userId = $("#userId").val();
    let newUsername = $("#newUsernameInput").val();
    let newEmail = $("#newEmail").val();
    let newCity = $("#newCity").val();
    let newPassword = $("#newPassword").val();

    console.log({
        userId: userId,
        newUsername: newUsername,
        newEmail: newEmail,
        newCity: newCity,
        newPassword: newPassword,
    });

    $.ajax({
        type: "POST",
        url: "/TheFightersParadise/controller/updateUserAjax.php",
        dataType: "json", // Expect a JSON response
        data: {
            userId: userId,
            newUsername: newUsername,
            newEmail: newEmail,
            newCity: newCity,
            newPassword: newPassword,
        },
        success: function(resp) {
            $("#message").html(resp.message);
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: " + status + error);
            console.log(xhr.responseText);
        }
    });
});