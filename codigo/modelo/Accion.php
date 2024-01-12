<?php
// Definición de la clase Accion que representa una entidad de acciones.
class Accion {
    // Atributos privados que almacenan información sobre la acción.
    private $nombre;
    private $fechaCompra;
    private $precioUnitario;
    private $cantidad;
    private $costoTotal;

    // Constructor que inicializa los atributos al crear un objeto Accion.
    public function __construct($nombre, $fechaCompra, $precioUnitario, $cantidad) {
        $this->nombre = $nombre;
        $this->fechaCompra = $fechaCompra;
        $this->precioUnitario = $precioUnitario;
        $this->cantidad = $cantidad;
        $this->costoTotal = $precioUnitario * $cantidad; // Calcula el costo total al crear el objeto
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
}
?>
