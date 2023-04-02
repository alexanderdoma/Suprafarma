<?php

class Cliente {
  private $idCliente;
  private $nombreCliente;
  private $apellidoCliente;
  private $nroDocumento;
  private $direccion;
  private $correo;
  private $celular;
  private $estadoCliente;
  
  function __construct() {
      
  }

  
  function getIdCliente() {
      return $this->idCliente;
  }

  function getNombreCliente() {
      return $this->nombreCliente;
  }

  function getApellidoCliente() {
      return $this->apellidoCliente;
  }

  function getNroDocumento() {
      return $this->nroDocumento;
  }

  function getDireccion() {
      return $this->direccion;
  }

  function getCorreo() {
      return $this->correo;
  }

  function getCelular() {
      return $this->celular;
  }

  function getEstadoCliente() {
      return $this->estadoCliente;
  }

  function setIdCliente($idCliente): void {
      $this->idCliente = $idCliente;
  }

  function setNombreCliente($nombreCliente): void {
      $this->nombreCliente = $nombreCliente;
  }

  function setApellidoCliente($apellidoCliente): void {
      $this->apellidoCliente = $apellidoCliente;
  }

  function setNroDocumento($nroDocumento): void {
      $this->nroDocumento = $nroDocumento;
  }

  function setDireccion($direccion): void {
      $this->direccion = $direccion;
  }

  function setCorreo($correo): void {
      $this->correo = $correo;
  }

  function setCelular($celular): void {
      $this->celular = $celular;
  }

  function setEstadoCliente($estadoCliente): void {
      $this->estadoCliente = $estadoCliente;
  }


}
