<?php
class Crud {

    public function mostrarDatos() {

        try {

            $conexion = Conexion::conectar();
            
            $coleccion = (new MongoDB\Client)->DestinosCR->Cabanas;

            $datos = $coleccion->find();

            return $datos;

        } catch (\Throwable $th) {

            return $th->getMessage();

        }

    }

}

class inserta{
    public function insertarDatos($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Cabanas;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    }

?>