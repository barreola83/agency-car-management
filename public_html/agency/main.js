$(document).ready(function() {
    let user =  JSON.parse(localStorage.getItem("user"));

    $("#username").text(localStorage.getItem("username"));
    $("#username").append("<small>Gerente de Agencia</small>");
    $("#welcomeMessage").text("¡Bienvenido, " + localStorage.getItem("username") + "!");

    $("#logout").click(function() {
        localStorage.clear();
    });

    /* Get all the outgoing requests */
    $.ajax({
        url: "get_outgoing_requests.php",
        type: "POST",
        data: {
            id_node: user.id_node
        },
        success: function(response) {
            console.log(response);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log('Error: ' + errorMessage);
        }
    });
});

//"<tr><td class='text-center' colspan='8'><strong>Sin solicitudes salientes</strong></td></tr>"

function approveOutgoingRequest()
{

}

function cancelOutgoingRequest()
{

}

function approveIncomingRequest()
{

}

function cancelIncomingRequest()
{

}