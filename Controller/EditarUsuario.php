<?php session_start();
    include "../Model/conexion.php";
    include "../Model/usuarioModel.php";

    $Crud = new Editar();

    $id = $_POST['id'];
    $datos = array(
        "Correo" => $_POST['Correo'],
        "Contrasena" => $_POST['Contrasena'],
        "Rol"=> $_POST['Rol']
      
    );

    $respuesta = $Crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:./../view/IndexAdmin.php");
    } else {
        print_r($respuesta);
    }

?>