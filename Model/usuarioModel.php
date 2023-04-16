<?php

class Login{
    public function EncontrarUsuario($Correo){
    try{
    $conexion = Conexion::conectar();
    $coleccion = (new MongoDB\Client)->DestinosCR->Usuarios;
    // Buscar el usuario en la base de datos
    $usuarioEncontrado = $coleccion->findOne(['Correo' => $Correo]);
     return $usuarioEncontrado;

} catch (\Throwable $th) {
    return $th->getMessage();

}
    }
}    
  
    


?>




















