<?php

include ("modelo/clsConexion.php");
include ("modelo/clsProducto.php");

class ProductoCRUD{

    private $conexion;
    private $auxPDO;
    
    //metodos
    public function __construct() {
        $this->conexion = new clsConexion('localhost','bdproductos','root','');
        $this->conexion->conectar();
        $this->auxPDO = $this->conexion->conexionPDO;
    }

    public function Listar(){
        $consulta = $this->auxPDO->prepare("SELECT * FROM producto");
        $consulta->execute();
        $resultado = array();
        foreach ($consulta->fetchALL(PDO::FETCH_OBJ) as $obj){
            $auxProducto = new Producto();
            $auxProducto->__SET('codigo',$obj->codigo);
            $auxProducto->__SET('nombre',$obj->nombre);
            $auxProducto->__SET('precio',$obj->precio);
            $resultado [] = $auxProducto;
        }
        return $resultado;
    }
    
    public function Obtener($codigo){
        $consulta = $this->auxPDO->prepare("SELECT * FROM producto WHERE codigo = ?");
        $consulta->execute(array($codigo));
        $resultado = new Producto();
        foreach ($consulta->fetchALL(PDO::FETCH_OBJ) as $obj){
            $resultado->__SET('codigo',$obj->codigo);
            $resultado->__SET('nombre',$obj->nombre);
            $resultado->__SET('correo',$obj->precio);            
        }
        return $resultado;
    }

    public function Registrar ($obj){
        try{
            $consulta = "INSERT INTO producto (nombre, precio) VALUES (?, ?)";
            $this->auxPDO->prepare($consulta)->execute(array(
                $obj->nombre,
                $obj->precio                
            ));
        }
        catch(Exception $e){
            die($e->getMessage());
        }           
    }
    public function actualizar($obj)
    {
        try {
            $consulta = "UPDATE producto SET nombre = ?, precio = ? WHERE codigo = ?";
            $this->auxPDO->prepare($consulta)->execute(array(

                $obj->nombre,
                $obj->precio,
                $obj->codigo

            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($codigo)
    {
        try {
            $consulta = "DELETE FROM producto WHERE codigo = ?";
            $this->auxPDO->prepare($consulta)->execute(array($codigo));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
