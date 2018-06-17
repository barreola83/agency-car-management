<?php
require "funciones.php";
$conn=ConectarBD();
$Nombre=test_input($_POST["Nombre"]);
if($Nombre==""){
    die("Debes escribir un nombre");
}
$result=$conn->query("Insert into prospects_clients(RFC,name,first_last_name,second_last_name,home_address,email,phone) values('".$Nombre."','".$Alias."','".$Alineacion."','".$Historia."')");
if($conn->error){
    die("Error en el query".$conn->error);
}
$row=$result->fetch_assoc();
?>
<tr>
    <td><?php echo $row["Ch_Nombre"]?></td>
	<td><?php echo $row["Ch_Alias"]?></td>
	<td><?php echo $row["Ch_Alineacion"]?></td>
    <td><?php echo $row["Ch_Historia"]?></td>
    <td>
        <input type="button" value="Editar" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalForm" onclick="loadEdit(this,<?php echo $row["Ch_Id"];?>)">
        <input type="button" value="Eliminar" class="btn btn-danger btn-sm" onclick="Eliminar(this,<?php echo $row["Ch_Id"];?>)">
    </td>
</tr>