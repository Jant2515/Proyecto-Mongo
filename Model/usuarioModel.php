<?php

class Login{
    public function EncontrarUsuario($usuario){
    try{
    $conexion = Conexion::conectar();
    $coleccion = (new MongoDB\Client)->DestinosCR->Usuario;
    // Buscar el usuario en la base de datos
    $usuarioEncontrado = $coleccion->findOne(
   array('Username' => new MongoDB\BSON\ObjectId ($usuario)));
    return $usuarioEncontrado;

} catch (\Throwable $th) {
    return $th->getMessage();

}
    }

    public function EncontrarContra($contrasena){
        try{
        $conexion = Conexion::conectar();
        $coleccion = (new MongoDB\Client)->DestinosCR->Usuario;
        // Buscar el usuario en la base de datos
        $contraEncontrado = $coleccion->findOne(
       array('password' => new MongoDB\BSON\ObjectId ($contrasena)));
        return $contraEncontrado;
    
    } catch (\Throwable $th) {
        return $th->getMessage();
    
    }
        }
}    
  
    


?>




















