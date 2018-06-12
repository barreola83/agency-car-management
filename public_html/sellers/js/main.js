$(document).ready(function(){
    $("#btnModalVender").click(function(){
        alert("Registrada exitosamente");
    });
    $("#btnModalApartar").click(function(){
        alert("Vehículo apartado exitosamente");
    });
    $("#btnModalSolicitar").click(function(){
        alert("Solicitud realizada exitosamente exitosamente");
    });

    $("#btnBuscarVehiculo").click(function(){
        window.open("vehicles.html","_self");
    });
});