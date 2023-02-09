<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit.fontawesome.com/d585fddfcd.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Produccion</title>
</head>

<body>
    <script>
        function question() {
            var respuesta = confirm("¿Estas seguro de eliminar este registro?");
            return respuesta;
        }
    </script>
    <?php
        include "controller/delete.php"
    ?>
    <div class="container-fluid row">
        <form class="col-md4 p-3" method="POST">
            <h1 class="text-center text-secondary">BIENVENIDO</h1>
            <h3 class="text-center alert alert-secondary">Ingrese Su Produccion</h3>
            <?php
            include "model/conexion.php";
            include "controller/register.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Refresco</label>
                <input type="text" class="form-control" name="drink">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad de Vasos</label>
                <input type="text" class="form-control" name="cups">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Produccion</label>
                <input type="date" class="form-control" name="date">
            </div>
            <button type="submit" class="btn btn-primary" name="btnin" value="ok">Ingresar</button>
            
        </form>
        

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="bg-info ">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">REFRESCO</th>
                        <th scope="col"># VASOS</th>
                        <th scope="col">FECHA</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'model/conexion.php';
                        $sql =$conexion->query( "SELECT * FROM datos");
                        while($data=$sql->fetch_object()){ ?>
                        <tr>
                            <th scope="row"><?php echo $data->id; ?></th>
                            <th scope="row"><?php echo $data->nombre; ?></th>
                            <th scope="row"><?php echo $data->refresco; ?></th>
                            <th scope="row"><?php echo $data->cant_vaso; ?></th>
                            <th scope="row"><?php echo $data->fecha_prod ; ?></th>
                            <td>
                                <a href="modify.php?id=<?= $data->id?>" class="btn btn-small btn-warning" ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return question()" href="index.php?id=<?= $data->id?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-trash"></i></a>
                            </td>
                    </tr>
                    
                    <?php }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/d585fddfcd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>