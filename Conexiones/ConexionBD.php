<?php
class Conexion{
    public static function IniciarConexion(){
        $conexion = new PDO("mysql:host=127.0.0.1;dbname=Escuela;charset=utf8", "luis", "1234");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }  
} 