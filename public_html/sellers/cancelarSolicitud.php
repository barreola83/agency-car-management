<?php
require "funciones.php";
if(empty($_POST["Id"])){
    die("Debes selecionar una Solicitud");
}
if(test_input($_POST["Id"])==""){
    die("Debes seleccionar una Solicitud");
}
if(!is_numeric($_POST["Id"])){
    die("Error en el id");
}

$conn=ConectarBD();
$conn->query("delete from requests where id=".test_input($_POST["Id"]));
if($conn->error){
    die("Error al eliminar: ".$conn->error);
}
echo "Ok";
?>