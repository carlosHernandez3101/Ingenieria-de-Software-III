<?php
require('Modelo/clsConexion.php');
class clsProductoAcceso{
    private $conexion;

    public function __construct(){
        $this->conexion = new clsConexion();

    }
    public function listar(){
        $sql = 'SELECT * FROM PRODUCTO';
        $consulta = $this->conexion->getConexion()->query($sql);
        $listadoProductos = [];
        $i = 0;
        while ($resul = $consulta->fetch_assoc()) {
            $listadoProductos[$i] = $resul;
            $i++;
        }
        return $listadoProductos;
    }
}
?>