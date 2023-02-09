<?php
include "model/conexion.php";
$id = $_GET['id'];
$sql = $conexion->query("SELECT * FROM datos WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" <meta
        name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>
    <form class="col-md4 p-3 m-auto" method="POST">
        <h1 class="text-center text-secondary">BIENVENIDO</h1>
        <h3 class="text-center alert alert-secondary">Modifique su Produccion</h3>
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <?php
        include "controller/modify.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="<?=$datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Refresco</label>
                <input type="text" class="form-control" name="drink" value="<?=$datos->refresco?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad de Vasos</label>
                <input type="text" class="form-control" name="cups" value="<?=$datos->cant_vaso?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Produccion</label>
                <input type="date" class="form-control" name="date" value="<?=$datos->fecha_prod?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnedit" value="ok">Editar</button>
            <a href="index.php" class="btn btn-danger">Volver Atras</a>
        <?php }
        ?>
    </form>
</body>

</html>
