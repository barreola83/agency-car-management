$(document).ready(function() {
    let user =  localStorage.getItem("user");
    console.log(JSON.parse(localStorage.getItem("user")));

    $("#username").text(localStorage.getItem("username"));
    $("#username").append("<small>Gerente de Agencia</small>");
    $("#welcomeMessage").text("¡Bienvenido, " + localStorage.getItem("username") + "!");
});

//"<tr><td class='text-center' colspan='7'><strong>Sin solicitudes salientes</strong></td></tr>"

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