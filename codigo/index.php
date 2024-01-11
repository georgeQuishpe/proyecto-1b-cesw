<?php
    require_once "controlador/ControladorAccion.php";

    // Capturar página que se quiere abrir
    $pagina = isset($_GET['pagina']) ? strtolower($_GET['pagina']) : 'listarAcciones';

    // Fragmento de código que contiene el header
    require_once 'vista/encabezado.php';

    // Parámetro enviado debe tener el mismo nombre del archivo a cargar
    require 'vista/' . $pagina . '.php';
    
    // Fragmento de código que contiene el footer
    require_once 'vista/piePagina.php';
?>