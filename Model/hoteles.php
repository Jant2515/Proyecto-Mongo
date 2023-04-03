<?php
class Crud {

    public function mostrarDatos() {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Hoteles;
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
            $coleccion = (new MongoDB\Client)->DestinosCR->Hoteles;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    }

class eliminar{
    public function eliminar($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Hoteles;
            $respuesta = $coleccion->deleteOne(
                                        array(
                                            "_id" => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
?>