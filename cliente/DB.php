<?php
class DB
{
    private static $conexion = null;

    public static function abreConexion()
    {
        if (self::$conexion == null) {

            self::$conexion = new PDO('mysql:host=datos;dbname=cestas', 'root', 'root');
        }
        return self::$conexion;
    }

    public static function desconexion()
    {
        self::$conexion = null;
    }

    public static function obtenerPersonas($conexion, $nombre) {
        $preparedConexion = $conexion->prepare("SELECT * FROM persona WHERE nombre= :nombre");
        $preparedConexion->bindParam(':nombre', $nombre);

        $preparedConexion->execute();
        $personas = array();

        $personas = $preparedConexion->fetchAll(PDO::FETCH_OBJ);
        
        return $personas;
    }


}
