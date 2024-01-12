<?php

use PHPUnit\Framework\TestCase;

require_once 'codigo\modelo\dao\AccionDAO.php';

class AccionDAOTest extends TestCase{
    public function test_given_twoInstances_when_getIntance_then_same() {
        $instancia1 = AccionDAO::obtenerInstancia();
        $instancia2 = AccionDAO::obtenerInstancia();

        $this->assertInstanceOf(AccionDAO::class, $instancia1);
        $this->assertSame($instancia1, $instancia2);
    }
    
    public function test_given_anInstance_when_consultAction_then_getArray() {
        $accionDAO = AccionDAO::obtenerInstancia();
        $acciones = $accionDAO->obtenerTodas();

        $this->assertIsArray($acciones);
    }

    public function test_given_oneAction_when_register_then_true() {
        $accionDAO = AccionDAO::obtenerInstancia();

        $accion = new Accion("","",0,0);
        $accion->nombre = 'Ejemplo';
        $accion->fechaCompra = '2024-01-11';
        $accion->precioUnitario = 10.5;
        $accion->cantidad = 5;
        $accion->costoTotal = 52.5;

        $resultado = $accionDAO->registrar($accion);

        $this->assertTrue($resultado);
    }
}

?>
 