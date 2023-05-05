<?php

class Producto {

    private $codigo;
    private $nombre;
    private $precio;
    
    
    public function __construct() {  }
    public function __GET($atr) {
        return $this->$atr;  }
    public function __SET($atr, $val) {
        return $this->$atr=$val; }
}