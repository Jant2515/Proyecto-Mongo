<?php

    require_once "./../Model/conexion.php";
    require_once "./../Model/calificaciones.php";
    
    $cal = new Califica();

    $datos = array(
        "Puntuacion" => $_POST['estrellas'],
        "Lugar" => $_POST['Lugar']
    );

    $respuesta = $cal->Calificar($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location: ../View/destination.php"); 
    } else {
        print_r($respuesta);
    }

?>