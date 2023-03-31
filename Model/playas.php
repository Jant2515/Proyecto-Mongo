<?php
class playa {

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
?>