<?php
class hostel {

    public function mostrarDatos() {

        try {

            $conexion = Conexion::conectar();
            
            $coleccion = (new MongoDB\Client)->DestinosCR->Hostel;

            $datos = $coleccion->find();

            return $datos;

        } catch (\Throwable $th) {

            return $th->getMessage();

        }

    }

}
?>