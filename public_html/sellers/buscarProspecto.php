<?php
require "funciones.php";
$conn=ConectarBD();
$result=$conn->query("Select * from prospects_clients where name like '%".$_POST["Nombre"]."%' or first_last_name like '%".$_POST["Nombre"]."%' or second_last_name like '%".$_POST["Nombre"]."%' order by name");
if($conn->error){
    die("Error en el query".$conn->error);
}
?>
<table class="table" id="prospectTable">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Tipo</th>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Correo</th>
            <th scope="col" class="text-center">Telefono</th>
            <th scope="col" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=$result->fetch_assoc()){
        ?>
        <tr>
		<td class="text-center"><?php echo $row["id"]?></td>
            <td class="text-center"><?php echo $row["type"]?></td>
			<td class="text-center">
                <?php echo $row["name"]?> <?php echo $row["first_last_name"]?> <?php echo $row["second_last_name"]?>
            </td>
			<td class="text-center"><?php echo $row["email"]?></td>
            <td class="text-center"><?php echo $row["phone"]?></td>
            <td class="text-center">
                <div class="form-group">
                	<button class="btn btn-success" style="font-size:20px" title="Modificar" data-toggle="modal" data-target="#ModalModificar" onclick="setModalInformation('mod1', 'img1', 'ver1', 'sel1', 'pri1', 'can1')">
                        <i class="material-icons">update</i>
                    </button>
                    <button class="btn btn-danger" style="font-size:20px" title="Eliminar" data-toggle="modal" data-target="#ModalEliminar">
                        <i class="material-icons">delete_forever</i>
                    </button>
                </div>
            </td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>