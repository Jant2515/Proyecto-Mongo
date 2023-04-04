<?php session_start();
    include "../Model/conexion.php";
    include "../Model/cabana.php";

    $Crud = new Editar();

    $id = $_POST['id'];
    $datos = array(
        "nombre" => $_POST['nombre'],
        "imagen" => $_POST['imagen'],
        "descripcion" => $_POST['descripcion']
    );

    $respuesta = $Crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }

?>