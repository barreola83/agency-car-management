<?php
require "funciones.php";
$RFC=$_POST["RFC"];
$conn=ConectarBD();
$result=$conn->query("Select name,first_last_name,second_last_name from prospects_clients where RFC like '%".$RFC."%'");
if($conn->error){
    die("Error en el query".$conn->error);
}
$row=$result->fetch_assoc();
echo $row["name"]." ".$row["first_last_name"]." ".$row["second_last_name"];
?>