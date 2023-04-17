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
  
    


?>




















