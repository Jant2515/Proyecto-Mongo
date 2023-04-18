<?php

require_once "./../Model/conexion.php";
require_once "./../Model/comentario.php";

    $comentar = new Comentar();

    $datos = array(
        "Nombre" => $_POST['nombre'],
        "Comentario" => $_POST['comentario']
    );

    $respuesta = $comentar->insertarComentario($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:./../view/indexUsua.php"); 
    } else {
        print_r($respuesta);
    }

?>