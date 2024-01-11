<?php
class Accion {
    public $nombre;
    public $fechaCompra;
    public $precioUnitario;
    public $cantidad;
    public $costoTotal;

    public function __construct($nombre, $fechaCompra, $precioUnitario, $cantidad) {
        $this->nombre = $nombre;
        $this->fechaCompra = $fechaCompra;
        $this->precioUnitario = $precioUnitario;
        $this->cantidad = $cantidad;
        $this->costoTotal = $precioUnitario * $cantidad; // Calcula el costo total al crear el objeto
    }

    public function __toString() {
        return "Nombre: {$this->nombre} <br> Fecha de compra: {$this->fechaCompra} <br> Precio de compra: {$this->precioUnitario} <br> Cantidad: {$this->cantidad} <br> Costo total de compra: {$this->costoTotal}";
    }
}
?>