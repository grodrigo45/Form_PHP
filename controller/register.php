<?php
    if(!empty($_POST["btnin"])){
        if(!empty($_POST["name"]) && !empty($_POST["drink"]) && !empty($_POST["cups"]) && !empty($_POST["date"])){
            $nombre = $_POST["name"];
            $refresco = $_POST["drink"];
            $cant_vaso = $_POST["cups"];
            $fecha_prod = $_POST["date"];

            $sql =$conexion->query("INSERT INTO datos (nombre, refresco, cant_vaso, fecha_prod) VALUES ('$nombre', '$refresco', '$cant_vaso', '$fecha_prod')");

            if($sql==1){
                echo '<div class="alert alert-sucess">Datos ingresados</div>';

            }else{
                echo '<div class="alert alert-danger">Ingrese todos los datos para continuar</div>';
        }

        }else{
            echo '<div class="alert alert-warning">Algun Campo esta vacio</div>';
        }
    }
?>