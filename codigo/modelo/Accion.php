<?php
// Definición de la clase Accion que representa una entidad de acciones.
class Accion {
    // Atributos privados que almacenan información sobre la acción.
    private $nombre;
    private $fechaCompra;
    private $precioUnitario;
    private $cantidad;
    private $costoTotal;
    private $cambio;
    private $gananciaPerdida;

    // Constructor que inicializa los atributos al crear un objeto Accion.
    public function __construct($nombre, $fechaCompra, $precioUnitario, $cantidad) {
        $this->nombre = $nombre;
        $this->fechaCompra = $fechaCompra;
        $this->precioUnitario = $precioUnitario;
        $this->cantidad = $cantidad;
        $this->costoTotal = $precioUnitario * $cantidad; 
        $this->gananciaPerdida = $this->getPrecioMercadoFromAPI($nombre) * $cantidad;
        $this->cambio = $this->calcularCambio();
    }

    // Método mágico __toString que devuelve una representación en cadena de la acción.
    public function __toString() {
        return "Nombre: {$this->nombre} <br> Fecha de compra: {$this->fechaCompra} <br> Precio de compra: {$this->precioUnitario} <br> Cantidad: {$this->cantidad} <br> Costo total de compra: {$this->costoTotal}";
    }

    // Métodos para obtener los valores de los atributos de la acción.
    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaCompra() {
        return $this->fechaCompra;
    }

    public function getPrecioUnitario() {
        return $this->precioUnitario;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getCostoTotal() {
        return $this->costoTotal;
    }
    public function setCosTotal($costo) {
        $this->costoTotal = $costo;
    }
    public function getCambio() {
        return $this->cambio;
    }
    public function setCamcio($cambio) {
        $this->cambio = $cambio;
    }
    public function getGananciaPerdida() {
        return $this->gananciaPerdida;
    }
    public function setGananciaPerdida($gananciaPerdida) {
        $this->gananciaPerdida = $gananciaPerdida;
    }

    private function calcularCambio() {
        if ($this->gananciaPerdida !== null) {
            $cambioPorcentaje = (($this->gananciaPerdida - $this->costoTotal) / $this->costoTotal) * 100;
            return $cambioPorcentaje;
        } else {
            return null; // Maneja el caso en el que no se pueda obtener la ganancia/pérdida
        }
    }

    private function getPrecioMercadoFromAPI($nombre) {
        $api_key = "cnb4dj9r01qks5iv03pgcnb4dj9r01qks5iv03q0";
        $url = "https://finnhub.io/api/v1/quote?symbol=$nombre&token=$api_key";
    
        $response = file_get_contents($url);
    
        $data = json_decode($response, true);
    
        if ($data && isset($data['c'])) {
            return $data['c'];
        } else {
            return -1;
        }
    }
}
?>
