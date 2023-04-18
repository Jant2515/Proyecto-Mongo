<?php

class Comentar{

    public function mostrarComentario() {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Comentarios;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();

        }

    }

    public function insertarComentario($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Comentarios;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}

?>