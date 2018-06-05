$(document).ready(function () {

    function access() {
        if ($("#username").val() == $("#password").val()) {
            window.location.replace("../global/index.html");
        } else {
            $("#signInError").modal("show");
        }
    }

    $("#login").click(function () {
        access();
    });

    $("#username, #password").keypress(function (e) {
        if (e.which == 13) {
            access();
        }
    });

});