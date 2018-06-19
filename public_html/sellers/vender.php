<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "funciones.php";
$Id=$_POST["Id"];
$Model=$_POST["Modelo"];

$conn=ConectarBD();
$result=$conn->query("select id from prospects_clients where RFC like '%".$_POST["RFC"]."%'");
if($conn->error){
    die("Error en la consulta".$conn->error);
}
$row=$result->fetch_assoc();
$Prospect=$row["id"];
$conn->close();

$conn=ConectarBD();
$result=$conn->query("select id_version, id_color from automobiles where id=".$Id);
if($conn->error){
    die("Error en la consulta".$conn->error);
}
$row=$result->fetch_assoc();
$Id_version=$row["id_version"];
$Id_color=$row["id_color"];
$conn->close();

$conn=ConectarBD();
$Add="CALL add_sale(2,4,".$Prospect.",'".$Model."',".$Id_version.",".$Id_color.",NOW());";
$result=$conn->query($Add);
if($conn->error){
    die("Error en la consulta".$conn->error);
}
echo "OK";
?>