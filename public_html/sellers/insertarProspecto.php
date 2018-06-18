<?php
require "funciones.php";
$conn=ConectarBD();
$Tipo=$_POST["Tipo"];
$RFC=$_POST["RFC"];
$Nombre=$_POST["Nombre"];
$Ap=$_POST["Ap"];
$Am=$_POST["Am"];
$Domicilio=$_POST["Domicilio"];
$Correo=$_POST["Correo"];
$Tel=$_POST["Tel"];

$result=$conn->query("Insert into prospects_clients(type,RFC,name,first_last_name,second_last_name,home_address,email,phone) values('".$Tipo."','".$RFC."','".$Nombre."','".$Ap."','".$Am."','".$Domicilio."','".$Correo."','".$Tel."')");
if($conn->error){
    die("Error en el query".$conn->error);
}
echo "OK";
?>