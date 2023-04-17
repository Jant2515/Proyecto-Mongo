<?php 
    require_once "./../Model/conexion.php";
    require_once "./../Model/usuarioModel.php";
    
    $login = new Login();

    $RolUsuario="2";

    $datos = array(
        "Correo" => $_POST['email'],
        "Contrasena" => $_POST['password'],
        "Rol" => $RolUsuario
    );

    $respuesta = $login->Registrar($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location: ../View/login.php"); 
    } else {
        print_r($respuesta);
    }

?>