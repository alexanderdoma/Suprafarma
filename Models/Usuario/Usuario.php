<?php

class Usuario {
    private $idUsuario;
    private $usuario;
    private $password;
    private $estadoUsuario;
    
    function __construct() {
        
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getEstadoUsuario() {
        return $this->estadoUsuario;
    }

    function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setEstadoUsuario($estadoUsuario): void {
        $this->estadoUsuario = $estadoUsuario;
    }
  
}
