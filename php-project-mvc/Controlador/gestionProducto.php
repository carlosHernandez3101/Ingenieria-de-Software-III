<?php
require('Modelo/clsProductoAcceso.php');

$datos = new clsProductoAcceso();
$lstProductos = $datos->listar();

require('vista/paginaProducto.php');

?>