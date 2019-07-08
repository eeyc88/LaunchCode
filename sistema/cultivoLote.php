<?php

class CultivoLote{

	private $idCultivoLote;
	private $idPeriodo;
	private $idLote;
	private $idCultivo;
	private $estado;

	function __construct($idCultivoLote, $idPeriodo, $idLote, $idCultivo, $estado){
		$this->idCultivoLote = $idCultivoLote ;
		$this->idPeriodo = $idPeriodo ;
		$this->idLote = $idLote ;
		$this->idCultivo = $idCultivo ;
		$this->estado = $estado ;
	}

	function setIdCultivoLote($idCultivoLote){
		$this->idCultivoLote = $idCultivoLote;
	}

	function getIdCultivoLote(){
		return $this->idCultivoLote;
	}

	function setIdPeriodo($idPeriodo){
                $this->idPeriodo = $idPeriodo;
        }

        function getIdPeriodo(){
                return $this->idPeriodo;
        }

	function setIdLote($idLote){
                $this->idLote = $idLote;
        }

        function getIdLote(){
                return $this->idLote;
        }

	function setIdCultivo($idCultivo){
                $this->idCultivo = $idCultivo;
        }

        function getIdCultivo(){
                return $this->idCultivo;
        }

	function setEstado($estado){
                $this->estado = $estado;
        }

        function getEstado(){
                return $this->estado;
        }

}

?>
