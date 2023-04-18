<?php 
    session_start();

    include "../Model/conexion.php";
    include "../Model/usuarioModel.php";
    
    $crud = new eliminar();
    $id = $_POST['id'];

    $respuesta = $crud->eliminar($id);

    if ($respuesta->getDeletedCount() > 0) {
        header("location:./../view/TablaUsua.php");
    } else {
        print_r($respuesta);
    }

?>