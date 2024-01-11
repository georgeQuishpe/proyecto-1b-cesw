<?php
require_once __DIR__ . '/../modelo/Accion.php';
require_once __DIR__ . '/../modelo/dao/AccionDAO.php';

class ControladorAccion {
    private static $instancia;

    private function __construct() {}

    public static function obtenerInstancia() {
        if (!self::$instancia) {
            self::$instancia = new ControladorAccion();
        }
        return self::$instancia;
    }

    public function obtenerTodas() {
        $accionDAO = AccionDAO::obtenerInstancia();
        return $accionDAO->obtenerTodas();
    }

    public function registrar() {
        if(isset($_POST['accion']) && $_POST['accion']=='registrarAccion'){
            $nuevaAccion = new Accion($_POST['nombre'], $_POST['fechaCompra'], $_POST['precioUnitario'], $_POST['cantidad']);
            //print($nuevaAccion);
            $accionDAO = AccionDAO::obtenerInstancia();
            $accionDAO->registrar($nuevaAccion);
            header('Location: ../index.php');
        }
    }
}

$controladorAccion = ControladorAccion::obtenerInstancia();
$controladorAccion->registrar();
?>


