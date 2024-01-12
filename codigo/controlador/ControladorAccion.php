<?php
require_once __DIR__ . '/../modelo/Accion.php';
require_once __DIR__ . '/../modelo/dao/AccionDAO.php';

class ControladorAccion {
    // Instancia única del ControladorAccion (patrón Singleton).
    private static $instancia;

    // Constructor privado para prevenir la instanciación externa.
    private function __construct() {}

    // Método estático para obtener la única instancia del controlador.
    public static function obtenerInstancia() {
        if (!self::$instancia) {
            self::$instancia = new ControladorAccion();
        }
        return self::$instancia;
    }

    // Método para obtener todas las acciones a través del AccionDAO.
    public function obtenerTodas() {
        $accionDAO = AccionDAO::obtenerInstancia();
        return $accionDAO->obtenerTodas();
    }

    // Método para registrar una nueva acción si se recibe una solicitud POST con la acción 'registrarAccion'.
    // Método para gestionar el registro de una nueva acción.
    public function registrar() {
        // Verifica si se ha enviado una solicitud POST y si la acción solicitada es 'registrarAccion'.
        if(isset($_POST['accion']) && $_POST['accion']=='registrarAccion'){
            $nuevaAccion = new Accion($_POST['nombre'], $_POST['fechaCompra'], $_POST['precioUnitario'], $_POST['cantidad']);
            $accionDAO = AccionDAO::obtenerInstancia();
            // Llama al método registrar del AccionDAO para almacenar la nueva acción en la base de datos.
            $accionDAO->registrar($nuevaAccion);
            // Redirecciona a la página principal después de registrar la acción.
            header('Location: ../index.php');
        }
    }

}

// Se crea una instancia del ControladorAccion.
$controladorAccion = ControladorAccion::obtenerInstancia();

// Se llama al método registrar del controlador para procesar la solicitud POST, si la hay.
$controladorAccion->registrar();
?>


