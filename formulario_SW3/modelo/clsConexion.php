<?php

class clsConexion {
    //put your code here
        //atributos
    private $conexionHost;
    private $BDnombre;
    private $BDusuario;
    private $BDclave;
    private $conexionPDO;
    private $estado = FALSE;
    
     //metodos
    public function __construct($conexionHOST, 
            $BDnombre, $BDusuario, $BDclave) {
            $this->conexionHost = $conexionHOST;
            $this->BDnombre = $BDnombre;
            $this->BDusuario = $BDusuario;
            $this->BDclave = $BDclave;
    }
    public function conectar(){
        try{
            $dsn = 'mysql:host='.$this->conexionHost.';'.'dbname='.$this->BDnombre;
            $this->conexionPDO = new PDO($dsn,$this->BDusuario,$this->BDclave);
            $this->conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
            $this->conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $this->estado = TRUE;
        }
        catch(PDOException $e){
            $this->ExceptionLog(e);
        }
    }
    public function desconectar(){
        $this->estado= FALSE;
        $this->conexionPDO = null;
    }
    public function __GET($atr){return $this->$atr;}
}