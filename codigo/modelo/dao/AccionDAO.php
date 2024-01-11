<?php
require_once 'BaseDatos.php';
require_once __DIR__ . '/../Accion.php';

class AccionDAO extends BaseDatos {
    private static $instancia;

    private function __construct() {}

    public static function obtenerInstancia() {
        if (!self::$instancia) {
            self::$instancia = new AccionDAO();
        }
        return self::$instancia;
    }

    public function obtenerTodas(){
        try{
            $result = parent::conectar()->prepare("SELECT * FROM acciones");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar($accion){
        try{
            $result = parent::conectar()->prepare("INSERT INTO acciones (nombre, fechaCompra, precioUnitario, cantidad, costoTotal) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $accion->nombre, PDO::PARAM_STR);
            $result->bindParam(2, $accion->fechaCompra, PDO::PARAM_STR);
            $result->bindParam(3, $accion->precioUnitario, PDO::PARAM_STR);
            $result->bindParam(4, $accion->cantidad, PDO::PARAM_STR);
            $result->bindParam(5, $accion->costoTotal, PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e){
           die("Error: No se ha podido registrar la acción " . $e->getMessage());
        }
    }
    
}
?>
