<?php
    include "../Model/conexion.php";
    include "../Model/hoteles.php";
    $crud = new eliminar();
    $id = $_POST['id'];

    $respuesta = $crud->eliminar($id);

    if ($respuesta->getDeletedCount() > 0) {
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }

?>