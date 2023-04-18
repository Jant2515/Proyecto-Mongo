<?php 
    require_once "./../Model/conexion.php";
    require_once "./../Model/usuarioModel.php";


    
    $Crud = new inserta();

    $datos = array(
        "Correo" => $_POST['Correo'],
        "Contrasena" => $_POST['Contrasena'],
        "Rol" => $_POST['Rol'],
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:./../view/IndexAdmin.php"); 
    } else {
        print_r($respuesta);
    }

?>