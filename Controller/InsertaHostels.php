<?php 
    require_once "./../Model/conexion.php";
    require_once "./../Model/hostels.php";

    $Crud = new inserta();

    $datos = array(
        "nombre" => $_POST['nombre'],
        "imagen" => $_POST['imagen'],
        "descripcion" => $_POST['descripcion']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:./../view/IndexAdmin.php"); 
    } else {
        print_r($respuesta);
    }

?>