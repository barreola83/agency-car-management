$(document).ready(function () {
    $("#btnRegistrar").click(function(){
		$.post("insertarProspecto.php",
		{
            Tipo:$("#idTipo").val(),
            RFC:$("#idRFC").val(),
			Nombre:$("#idNombre").val(),
			Ap:$("#idAp").val(),
            Am:$("#idAm").val(),
            Domicilio:$("#idDomicilio").val(),
            Correo:$("#idCorreo").val(),
            Tel:$("#idTel").val()},
			function(data,status){
				if(data=="OK"){
                    alert("Registrado correctamente");
                }
		});
    });
    
    $("#IdSearch").on("input",function(){
		$.post("buscarProspecto.php",{Nombre:$("#IdSearch").val()},function(data,status){
			$("#DivTabla").html(data);
		});
	});

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