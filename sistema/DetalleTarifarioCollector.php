<?php

include_once('detalleTarifario.php');
include_once('Collector.php');

class DetalleTarifarioCollector extends Collector
{
  
  function showDetallesTarifarios() {
    $rows = self::$db->getRows("SELECT idcabeceratarifario,iddetalletarifario,idlabor,idmedida,valor FROM controlAgricola.detalletarifario order by idcabeceratarifario,iddetalletarifario ");        
    $arrayDetalleTarifario= array();        
    foreach ($rows as $c){
      $aux = new DetalleTarifario($c{'idcabeceratarifario'},$c{'iddetalletarifario'},$c{'idlabor'},$c{'idmedida'},$c{'valor'});
      array_push($arrayDetalleTarifario, $aux);
    }
    return $arrayDetalleTarifario;        
  }
  function deleteDetallesTarifarios($id, $idCabecera) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.detalletarifario where iddetalletarifario = $id and idcabeceratarifario= '$idCabecera'", null);             
  }

function insertDetallesTarifarios($idcabeceratarifario, $id, $idlabor, $idmedida, $valor) {
    $rows = self::$db->insertRow("Insert into controlAgricola.detalletarifario (idcabeceratarifario, iddetalletarifario, idlabor, idmedida, valor) values ('$idcabeceratarifario', '$id', '$idlabor', '$idmedida', '$valor' )" , null);             
  }

function updateDetallesTarifarios($idcabeceratarifario, $id, $idlabor, $idmedida, $valor) {
    $rows = self::$db->updateRow("Update controlAgricola.detalletarifario set idlabor = '$idlabor', idmedida = '$idmedida', valor = '$valor' where iddetalletarifario =$id and idcabeceratarifario= '$idcabeceratarifario'", null);             
  }

}
?>
