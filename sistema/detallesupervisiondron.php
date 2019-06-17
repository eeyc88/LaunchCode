<?php

class DetalleSupervisionDron{

  private $idCabeceraDron;
  private $iddetalledron;
  private $idEmpleado;
  private $idLabor;
  private $cantidad;
  private $tarifa;
  private $imagen;
   

    function __construct($idCabeceraDron, $iddetalledron, $idEmpleado, $idLabor, $cantidad, $tarifa, $imagen){
    $this->idCabeceraDron = $idCabeceraDron;
    $this->iddetalledron = $iddetalledron;
	$this->idEmpleado = $idEmpleado;
    $this->idLabor = $idLabor;
    $this->cantidad = $cantidad;
    $this->tarifa = $tarifa;
	$this->imagen = $imagen;
    }
    function setIdCabeceraDron($idCabeceraDron){
      $this->idCabeceraDron = $idCabeceraDron;
    }
    function getIdCabeceraDron(){
      return $this->idCabeceraDron;
    }
    function setIdDetalleDron($iddetalledron){
      $this->iddetalledron = $iddetalledron;
    }
    function getIdDetalleDron(){
      return $this->iddetalledron;
    }
	function setidEmpleado($idEmpleado){
      $this->idEmpleado = $idEmpleado;
    }
    function getidEmpleado(){
      return $this->idEmpleado;
    }
    function setIdLabor($idLabor){
      $this->idLabor = $idLabor;
    }
    function getIdLabor(){
      return $this->idLabor;
    }
    function setCantidad($cantidad){
      $this->cantidad = $cantidad;
    }
    function getCantidad(){
      return $this->cantidad;
    }
    function setTarifa($tarifa){
      $this->tarifa = $tarifa;
    }
    function getTarifa(){
      return $this->tarifa;
    }
	function setImagen($imagen){
      $this->imagen = $imagen;
    }
    function getImagen(){
      return $this->imagen;
    }
}

?>
