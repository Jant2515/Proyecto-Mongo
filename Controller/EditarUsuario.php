<?php session_start();
    include "../Model/conexion.php";
    include "../Model/usuarioModel.php";

    $Crud = new Editar();

    $id = $_POST['id'];
    $datos = array(
        "correo" => $_POST['correo'],
        "contrasena" => $_POST['contrasena'],
      
    );

    $respuesta = $Crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:./../view/IndexAdmin.php");
    } else {
        print_r($respuesta);
    }

?>