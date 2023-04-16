<?php
include "../Model/conexion.php";
include "../Model/usuarioModel.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login= new Login();


    
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];// Obtener el rol del usuario
    

    $respuesta=$login ->EncontrarUsuario($usuario);
  // Verificar si se encontró un usuario con ese nombre
  if ($respuesta) {
    // Verificar si la contraseña coincide
    if (password_verify($contrasena, $respuesta->password)) {
        // Verificar el rol del usuario
        if ($respuesta->Rol_id == $rol) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['usuario'] = $respuesta->Username;
            $_SESSION['rol'] = $respuesta->Rol_id; // Almacenar el rol del usuario en la sesión
            // Redirigir a la página de inicio
            header('Location: ../index.php');
            exit;
        } else {
            // Rol incorrecto
            echo "El usuario no tiene el rol correcto.";
        }
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta.";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado.";
}
}
















?>