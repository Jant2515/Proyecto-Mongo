<?php
include "../Model/conexion.php";
include "../Model/usuarioModel.php";




    $login= new Login();

    // Obtener los datos del formulario
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];
    
    $respuesta = $login->EncontrarUsuario($Correo);


    // Verificar si se encontró un usuario con ese nombre
    // Verificar si la contraseña coincide
    if ($respuesta && $respuesta ->Contrasena == $Contrasena) {
        session_start(); 
        $_SESSION["Correo"] = $Correo;
        header("Location: ../index.php");
        exit;
    } else {
        // Rol incorrecto 
        echo "Contraseña incorrecta.";
    }
     
        
    
?>