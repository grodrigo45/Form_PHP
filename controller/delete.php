<?php
include('model/conexion.php');
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = $conexion->query("DELETE FROM datos WHERE id = $id");
    if($sql==1){
        echo "<script>alert('Produccion Eliminada')</script>";
        header("location: index.php");
    }else{
        echo "<script>alert('Error al Eliminar')</script>";
    }
    
}
?>