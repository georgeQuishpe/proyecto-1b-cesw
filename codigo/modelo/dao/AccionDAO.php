<?php
// Se incluyen los archivos necesarios para utilizar la clase BaseDatos y la clase Accion.
require_once 'BaseDatos.php';
require_once __DIR__ . '/../Accion.php';

// Definición de la clase AccionDAO que se encarga de interactuar con la base de datos para la entidad Accion.
class AccionDAO extends BaseDatos {
    // Instancia única del AccionDAO (patrón Singleton).
    private static $instancia;

    // Constructor privado para prevenir la instanciación externa.
    private function __construct() {}

    // Método estático para obtener la única instancia del AccionDAO.
    public static function obtenerInstancia() {
        if (!self::$instancia) {
            self::$instancia = new AccionDAO();
        }
        return self::$instancia;
    }

    // Método para obtener todas las acciones almacenadas en la base de datos.
    public function obtenerTodas(){
        try{
            // Prepara y ejecuta una consulta SQL para seleccionar todas las filas de la tabla 'acciones'.
            $result = parent::conectar()->prepare("SELECT * FROM acciones");
            $result->execute();
            // Retorna todas las filas como un arreglo asociativo.
            return $result->fetchAll();
        }catch(Exception $e){
            // En caso de error, muestra el mensaje de error y termina el script.
            die($e->getMessage());
        }
    }

    // Método para ordenar la lista de acciones almacenadas en la base de datos por el nombre de la acción.
    public function obtenerTodasOrdenadasPorPU(){
        try{
            // Prepara y ejecuta una consulta SQL para seleccionar todas las filas de la tabla 'acciones' ordenadas por el nombre de la acción.
            $result = parent::conectar()->prepare("SELECT * FROM acciones ORDER BY precioUnitario");
            $result->execute();
            // Retorna todas las filas como un arreglo asociativo.
            return $result->fetchAll();
        }catch(Exception $e){
            // En caso de error, muestra el mensaje de error y termina el script.
            die($e->getMessage());
        }
    }

    // Método para registrar una nueva acción en la base de datos.
    public function registrar($accion){
        try{
            // Prepara una consulta SQL para insertar una nueva fila en la tabla 'acciones'.
            $result = parent::conectar()->prepare("INSERT INTO acciones (nombre, fechaCompra, precioUnitario, cantidad, costoTotal) VALUES (?,?,?,?,?)");
            
            // Obtiene los atributos de la instancia de Accion para la inserción.
            $nombre = $accion->getNombre();
            $fechaCompra = $accion->getFechaCompra();
            $precioUnitario = $accion->getPrecioUnitario();
            $cantidad = $accion->getCantidad();
            $costoTotal = $accion->getCostoTotal();

            // Vincula los parámetros de la consulta con los valores obtenidos de la instancia de Accion.
            $result->bindParam(1, $nombre, PDO::PARAM_STR);
            $result->bindParam(2, $fechaCompra, PDO::PARAM_STR);
            $result->bindParam(3, $precioUnitario, PDO::PARAM_STR);
            $result->bindParam(4, $cantidad, PDO::PARAM_STR);
            $result->bindParam(5, $costoTotal, PDO::PARAM_STR);
            
            // Ejecuta la consulta y retorna el resultado.
            return $result->execute();
        } catch (Exception $e){
            // En caso de error, muestra un mensaje personalizado y termina el script.
            die("Error: No se ha podido registrar la acción " . $e->getMessage());
        }
    }
}
?>
