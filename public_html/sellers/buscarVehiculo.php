<?php
require "funciones.php";
$Modelo=$_POST["Modelo"];
$conn=ConectarBD();
$result=$conn->query("select DISTINCT(automobiles.id_version),automobiles.image_path, specs.model,versions.version_name from automobiles INNER JOIN specs ON specs.model='".$Modelo."' INNER JOIN versions ON automobiles.id_version=versions.id");
if($conn->error){
    die("Error en la consulta".$conn->error);
}
?>
<thead class="thead-light">
    <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Imagen</th>
        <th scope="col" class="text-center">Modelo</th>
        <th scope="col" class="text-center">Versión</th>
        <th scope="col" class="text-center">Acciones</th>
    </tr>
</thead>
<tbody>
    <?php
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td class="text-center"><?php echo $row["id_version"]?></td>
        <td class="text-center"><img id="img1" src="../../<?php echo $row["image_path"]?>" class="img-fluid" width="100" height="100"></td>
        <td class="text-center"><?php echo $row["model"]?></td>
        <td class="text-center"><?php echo $row["version_name"]?></td>
        <td class="text-center">
            <div class="form-group">
                <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod1', 'img1', 'ver1', 'sel1', 'pri1', 'can1')">
                    <i class="material-icons">add_shopping_cart</i>
                </button>
                <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar">
                    <i class="material-icons">book</i>
                </button>
                <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                    disabled>
                    <i class="material-icons">compare_arrows</i>
                </button>
            </div>
        </td>
    </tr>
    <?php }
    ?>
</tbody>