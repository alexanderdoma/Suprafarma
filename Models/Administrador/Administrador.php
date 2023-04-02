<?php

class Administrador {
    private $idAdministrador;
    private $usuario;
    private $password;
    private $estadoAdministrador;
    
    function __construct() {
        
    }
    
    function getIdAdministrador() {
        return $this->idAdministrador;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getEstadoAdministrador() {
        return $this->estadoAdministrador;
    }

    function setIdAdministrador($idAdministrador): void {
        $this->idAdministrador = $idAdministrador;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setEstadoAdministrador($estadoAdministrador): void {
        $this->estadoAdministrador = $estadoAdministrador;
    }


}
