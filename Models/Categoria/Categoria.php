<?php


class Categoria {
    private $idCategoria;
    private $nombreCategoria;
    
    function __construct() {
        
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function setIdCategoria($idCategoria): void {
        $this->idCategoria = $idCategoria;
    }

    function setNombreCategoria($nombreCategoria): void {
        $this->nombreCategoria = $nombreCategoria;
    }

    function _toString(){
        return $this->nombreCategoria; 
    }
    
}
