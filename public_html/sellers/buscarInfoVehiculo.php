<?php
require "funciones.php";
$Modelo=$_POST["Modelo"];
$Version=$_POST["Version"];
$conn=ConectarBD();
$result=$conn->query("Select MIN(automobiles.id) as id, specs.model,versions.version_name FROM automobiles INNER JOIN specs ON specs.model='".$Modelo."' INNER JOIN versions ON versions.version_name='".$Version."' where automobiles.is_sold=0");
if($conn->error){
    die("Error en la consulta".$conn->error);
}
$row=$result->fetch_assoc();
echo $row["id"];
?>