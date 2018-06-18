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
$conn->query("update prospects_clients set name='".$_POST["Nombre"]."' where id=".$_POST["Id"]);
if($conn->error){
    die("Error al editar: ".$conn->error);
}
echo "Ok";
?>