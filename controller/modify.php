<?php
if (!empty($_POST['btnedit'])) {
    if (!empty($_POST['name']) && !empty($_POST['drink']) && !empty($_POST['cups']) && !empty($_POST['date'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $drink = $_POST['drink'];
        $cups = $_POST['cups'];
        $date = $_POST['date'];
        $id = $_GET['id'];
        $sql = $conexion->query("UPDATE datos SET nombre = '$name', refresco = '$drink', cant_vaso = '$cups', fecha_prod = '$date' WHERE id = $id");
        if ($sql == 1) {
            header("location: index.php");
        }
    }else{
        echo "<script>alert('Error al Actualizar')</script>";
    }
}
?>