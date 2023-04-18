<?php

class Login{

    public function EncontrarUsuario($Correo){
    
        try{

            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
            $usuarioEncontrado = $coleccion->findOne(['Correo' => $Correo]);
            return $usuarioEncontrado;

        } catch (\Throwable $th) {
        
            return $th->getMessage();

        }
    }

    public function Registrar($datos) {
        try {

            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;

        } catch (\Throwable $th) {

            return $th->getMessage();
            
        }
    }
}    
  
class CrudUsuario {

    public function mostrarDatos() {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
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
        $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
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
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
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

class Editar{


    public function obtenerDocumento($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
            $datos = $coleccion->findOne(
                                    array(
                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                    )
                                );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizar($id, $datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
            $respuesta = $coleccion->updateOne(
                                        ['_id' => new MongoDB\BSON\ObjectId($id)],
                                        [
                                            '$set' => $datos    
                                        ]
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


}


?>




















