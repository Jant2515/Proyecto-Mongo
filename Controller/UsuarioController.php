<?php

    include "../Model/conexion.php";
    include "../Model/usuarioModel.php";

    $login = new Login();

    // Obtener los datos del formulario
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];
    
    $respuesta = $login->EncontrarUsuario($Correo);


    // Verificar si se encontró un usuario con ese nombre
    // Verificar si la contraseña coincide
    if ($respuesta && $respuesta -> Contrasena == $Contrasena) {
        
        if($respuesta -> Rol == "1"){

            header("Location: ../View/IndexAdmin.php");

        }else{

            header("Location: ../index.php");

        }

        
        exit;

    } else {
        echo "Contraseña incorrecta.";
    }
     
        
    
?>