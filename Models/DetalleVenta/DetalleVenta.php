<?php

class DetalleVenta {
   private $idVenta;
   private $idProductoVenta;
   private $precioProducto;
   private $cantidad;
   
   function __construct() {
       
   }
   
   function getIdVenta() {
       return $this->idVenta;
   }

   function getIdProductoVenta() {
       return $this->idProductoVenta;
   }

   function getPrecioProducto() {
       return $this->precioProducto;
   }

   function getCantidad() {
       return $this->cantidad;
   }

   function setIdVenta($idVenta): void {
       $this->idVenta = $idVenta;
   }

   function setIdProductoVenta($idProductoVenta): void {
       $this->idProductoVenta = $idProductoVenta;
   }

   function setPrecioProducto($precioProducto): void {
       $this->precioProducto = $precioProducto;
   }

   function setCantidad($cantidad): void {
       $this->cantidad = $cantidad;
   }


   
}
