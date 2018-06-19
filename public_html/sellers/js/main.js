var btn=0;
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

    $("#btnModalModificar").click(function(){
		$.post("modificarProspecto.php",
		{
            Id:$("#ModalModificarId").val(),
            Tipo:$("#ModalModificarTipo").val(),
            RFC:$("#ModalModificarRFC").val(),
			Nombre:$("#ModalModificarNombre").val(),
			Ap:$("#ModalModificarAp").val(),
            Am:$("#ModalModificarAm").val(),
            Domicilio:$("#ModalModificarDomicilio").val(),
            Correo:$("#ModalModificarCorreo").val(),
            Tel:$("#ModalModificarTel").val()
        },
			function(data,status){
				if(data=="OK"){
                    alert("Modificado Correctamente");
                    window.location.reload();
                }
		    });
    });

    $("#btnModalEliminar").click(function(){
        $.post("eliminarProspecto.php",{Id:$("#ModalEliminarId").val()},function(data,status){
            if(data!="OK"){
                alert(data);
                return;
            }
            alert("Eliminado Correctamente");
            window.location.reload();
        });
    });
    
    $("#IdSearch").on("input",function(){
		$.post("buscarProspecto.php",{Nombre:$("#IdSearch").val()},function(data,status){
			$("#DivTabla").html(data);
		});
    });
    
    $("#selFiltro").on("change",function(){
		$.post("buscarVehiculo.php",{Modelo:$("#selFiltro").val()},function(data,status){
			$("#stockTable").html(data);
		});
	});

    $("#btnBuscarVehiculo").click(function () {
        window.open("vehicles.html", "_self");
    });

    $("#ModalVenderRFC").on("input",function(){
		$.post("buscarProspectoE.php",{RFC:$("#ModalVenderRFC").val()},function(data,status){
			$("#ModalVenderName").val(data);
		});
    });

    $("#btnModalVender").click(function(){
        $.post("vender.php",{
            Id:$("#ModalVenderId").val(),Modelo:$("#ModalVenderModelo").html(),RFC:$("#ModalVenderRFC").val()
        },
            function(data,status){
                if (data != "OK") { alert(data); return; }
                window.location.reload();
        });
    });
});

function CancelarSolicitud(Obj,IdE) {
    if (!confirm("¿Esta seguro que desea cancelar la solicitud?"))
        return;
    $.post("cancelarSolicitud.php", { Id: IdE }, function (data, status) {
        if (data != "OK") { alert(data); return; }
        window.location.reload();
    });
}

function loadEdit(Obj,IdE)
{
    $("#ModalModificarId").val(IdE);
    $("#ModalModificarTipo").val(Obj.parentNode.parentNode.parentNode.childNodes[3].innerText);
    $("#ModalModificarRFC").val(Obj.parentNode.parentNode.parentNode.childNodes[5].innerText);
    $("#ModalModificarNombre").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].innerText);
    $("#ModalModificarAp").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[3].innerText);
    $("#ModalModificarAm").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[5].innerText);
	$("#ModalModificarDomicilio").val(Obj.parentNode.parentNode.parentNode.childNodes[9].innerText);
    $("#ModalModificarCorreo").val(Obj.parentNode.parentNode.parentNode.childNodes[11].innerText);
    $("#ModalModificarTel").val(Obj.parentNode.parentNode.parentNode.childNodes[13].innerText);
    btn=Obj;
}

function loadDelete(Obj,IdE)
{
    $("#ModalEliminarId").val(IdE);
    $("#ModalEliminarTipo").val(Obj.parentNode.parentNode.parentNode.childNodes[3].innerText);
    $("#ModalEliminarRFC").val(Obj.parentNode.parentNode.parentNode.childNodes[5].innerText);
	$("#ModalEliminarNombre").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[1].innerText);
    $("#ModalEliminarAp").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[3].innerText);
    $("#ModalEliminarAm").val(Obj.parentNode.parentNode.parentNode.childNodes[7].childNodes[5].innerText);
	$("#ModalEliminarDomicilio").val(Obj.parentNode.parentNode.parentNode.childNodes[9].innerText);
    $("#ModalEliminarCorreo").val(Obj.parentNode.parentNode.parentNode.childNodes[11].innerText);
    $("#ModalEliminarTel").val(Obj.parentNode.parentNode.parentNode.childNodes[13].innerText);
}

function setModalVender(model,version)
{
    $.post("buscarInfoVehiculo.php",{Modelo:model,Version:version},function(data,status){
        $("#ModalVenderModelo").html(model);
        $("#ModalVenderVersion").val(version);
        $("#ModalVenderId").val(data);
    });
}

function setModalSolicitar(Obj,IdE)
{
    $.post("buscarInfoVehiculo.php",{Modelo:model,Version:version},function(data,status){
        $("#ModalSolicitarVersion").val(version);
        $("#ModalSolicitarColor").val($_GET["color"]);
    });
}