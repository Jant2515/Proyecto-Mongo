<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/DestinosCR-Mongo/Proyecto-Mongo/vendor/autoload.php";
class Conexion {

    public static function conectar() {
       try {
            $servidor = "127.0.0.1";
            $puerto = "27017";
            $usuario = "";
            $password = "";
            $BD = "DestinosCR";
            $cadenaConexion = "mongodb://" . 
                                $usuario . ":" . 
                                $password . "@". 
                                $servidor .":". 
                                $puerto ."/". 
                                $BD;
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($BD);
       } catch (\Throwable $th) {
           return $th->getMessage();
       }
    }

}

?>