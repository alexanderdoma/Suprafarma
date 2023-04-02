<?php


class Producto {
    private $idProducto;
    private $nombreProducto;
    private $precioProducto;
    private $stockProducto;
    private $idSubProducto;
    private $estadoProducto;
    
    
    function __construct() {
        
    }

    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombreProducto() {
        return $this->nombreProducto;
    }

    function getPrecioProducto() {
        return $this->precioProducto;
    }

    function getStockProducto() {
        return $this->stockProducto;
    }

    function getIdSubProducto() {
        return $this->idSubProducto;
    }

    function getEstadoProducto() {
        return $this->estadoProducto;
    }

    function setIdProducto($idProducto): void {
        $this->idProducto = $idProducto;
    }

    function setNombreProducto($nombreProducto): void {
        $this->nombreProducto = $nombreProducto;
    }

    function setPrecioProducto($precioProducto): void {
        $this->precioProducto = $precioProducto;
    }

    function setStockProducto($stockProducto): void {
        $this->stockProducto = $stockProducto;
    }

    function setIdSubProducto($idSubProducto): void {
        $this->idSubProducto = $idSubProducto;
    }

    function setEstadoProducto($estadoProducto): void {
        $this->estadoProducto = $estadoProducto;
    }


    
}
