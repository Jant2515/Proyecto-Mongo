<?php
class hotel {

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
?>