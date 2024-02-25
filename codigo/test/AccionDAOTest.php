<?php

use PHPUnit\Framework\TestCase;

require_once 'modelo\dao\AccionDAO.php';

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
    
        $accion = new Accion("Ejemplo", "2024-01-11", 10.5, 5);
        $accion->setCosTotal(52.5); 
    
        $resultado = $accionDAO->registrar($accion);
    
        $this->assertTrue($resultado);
    }
    
}

?>
 