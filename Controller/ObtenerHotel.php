<?php
    session_start();

    $crud = new Editar();

    $id = $_POST['id'];

    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;

    return($idMongo);

?>