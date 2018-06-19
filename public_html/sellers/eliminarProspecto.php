<?php
require "funciones.php";
if(empty($_POST["Id"])){
    die("Debes selecionar un cliente");
}
if(test_input($_POST["Id"])==""){
    die("Debes seleccionar un cliente");
}
if(!is_numeric($_POST["Id"])){
    die("Error en el id");
}

$conn=ConectarBD();
$conn->query("delete from prospects_clients where id=".test_input($_POST["Id"]));
if($conn->error){
    die("Error al eliminar: ".$conn->error);
}
echo "OK";
?>