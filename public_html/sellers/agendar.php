<?php
require "funciones.php";
$conn=ConectarBD();
$Fecha=$conn->query("Select CONVERT(".$_POST["Fecha"].", DATETIME)");
$Asunto=$_POST["Asunto"];
$Prospecto=$_POST["Prospecto"];
$result=$conn->query("Insert into appointments(id_node,id_user,id_prospect_client,date_time,subject) values(2,4,".$Prospecto.",".$Fecha.",'".$Asunto."');");
if($conn->error){
    die("Error en el query".$conn->error);
}
echo "OK";
?>