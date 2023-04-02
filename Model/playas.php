<?php
class Crud {

    public function mostrarDatos() {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Playas;
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
        $coleccion = (new MongoDB\Client)->DestinosCR->Playas;
        $respuesta = $coleccion->insertOne($datos);
        return $respuesta;
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
}
}

?>

