$(document).ready(function () {


    $("#login").click(function () {
        access($("#username").val(), $("#password").val());
    });

    $("#username, #password").keypress(function (e) {
        if (e.which == 13) {
            access($("#username").val(), $("#password").val());
        }
    });

    function access(username, password) {
        if (username.length === 0 || password.length === 0) {
            showError();
        } else {
            $.ajax({
                data: {
                    "username": username,
                    "password": password
                },
                url: "http://localhost/signin.php",
                dataType: 'json',
                type: "POST",
                crossDomain: true,
                beforeSend: function () {
                    $("#login").html("Accediendo...");
                },
                success: function (response) {
                    console.log(response);
                    if (response != "undefined" || response != "") {
                        switch (response["0"].role) {
                            case "Agency Manager":
                                window.location.replace("../agency/index.html");
                                localStorage.setItem("username", response["0"].name);
                                localStorage.setItem("role", response["0"].role);
                                break;
                            case "Global Manager":
                                window.location.replace("../global/index.html");
                                localStorage.setItem("username", response["0"].name);
                                localStorage.setItem("role", response["0"].role);
                                break;
                            case "Seller":
                                window.location.replace("../sellers/index.php");
                                localStorage.setItem("username", response["0"].name);
                                localStorage.setItem("role", response["0"].role);
                                break;
                        }
                    } else {
                        showError();
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    showError();
                    console.warn(jqXhr.responseText);
                    console.warn('Error: ' + errorMessage);
                }
            })
        }
    }

    function showError() {
        $("#login").html("Acceder");
        $("#signInError").modal('show');
        $("#username").focus();
    }
});