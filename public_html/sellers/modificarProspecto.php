<?php

require "funciones.php";
if(empty($_POST["Id"])){
    die("Debes selecionar un Prospecto/Cliente");
}
if(test_input($_POST["Id"])==""){
    die("Debes seleccionar un Prospecto/Cliente");
}
if(!is_numeric($_POST["Id"])){
    die("Error en el id");
}
$conn=ConectarBD();
$conn->query("update prospects_clients set type='".$_POST["Tipo"]."', RFC='".$_POST["RFC"]."', name='".$_POST["Nombre"]."',first_last_name='".$_POST["Ap"]."', second_last_name='".$_POST["Am"]."', home_address='".$_POST["Domicilio"]."', email='".$_POST["Correo"]."', phone='".$_POST["Tel"]."' where id=".$_POST["Id"]);
if($conn->error){
    die("Error al editar: ".$conn->error);
}
echo "OK";
?>