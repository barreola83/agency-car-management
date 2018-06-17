$(document).ready(function () {
    /*
    $("#btnModalVender").click(function(){
        alert("Registrada exitosamente");
    });
    $("#btnModalApartar").click(function(){
        alert("Vehículo apartado exitosamente");
    });
    $("#btnModalSolicitar").click(function(){
        alert("Solicitud realizada exitosamente exitosamente");
    });
    */

    $("#btnBuscarVehiculo").click(function () {
        window.open("vehicles.html", "_self");
    });

    $("#btnModalVender").click(function(){
        $.post("vender.php",{Id:Id},function(data,status){
            if (data != "OK") { alert(data); return; }
        });
    });

    $("#btnModalApartar").click(function(){
        $.post("vender.php",{Id:Id},function(data,status){
            if (data != "OK") { alert(data); return; }
        });
    });

    $("#btnModalSolicitar").click(function(){
        $.post("vender.php",{Id:Id},function(data,status){
            if (data != "OK") { alert(data); return; }
        });
    });
});

function CancelarSolicitud(Obj,IdE) {
    if (!confirm("¿Esta seguro que desea cancelar la solicitud?"))
        return;
    $.post("cancelarSolicitud.php", { Id: IdE }, function (data, status) {
        if (data != "OK") { alert(data); return; }
        row = Obj.parentNode.parentNode.rowIndex;
        document.getElementById('requestsTable').deleteRow(row);
    });
}