<?php 
    require_once "./../Model/conexion.php";
    require_once "./../Model/usuarioModel.php";


    
    $Crud = new inserta();

    $datos = array(
        "correo" => $_POST['correo'],
        "contrasena" => $_POST['contrasena'],
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:./../view/IndexAdmin.php"); 
    } else {
        print_r($respuesta);
    }

?>