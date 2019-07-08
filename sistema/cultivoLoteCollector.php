<?php

include_once('cultivoLote.php');
include_once('Collector.php');

class CultivoLoteCollector extends Collector
{
  
  function showCultivoLotes() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.cultivolote ");        
    $arrayCultivoLote= array();        
    foreach ($rows as $c){
      $aux = new CultivoLote($c{'idcultivolote'},$c{'idperiodo'},$c{'idlote'},$c{'idcultivo'},$c{'estado'});
      array_push($arrayCultivoLote, $aux);
    }
    return $arrayCultivoLote;        
  }

  function deleteCultivoLote($idCultivoLote) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cultivolote where idcultivolote = $idCultivoLote",null);   
    return true;          
  }

  function insertCultivoLote($idPeriodo, $idLote, $idCultivo, $estado) {
    $rows = self::$db->insertRow("INSERT INTO controlAgricola.cultivolote (idperiodo, idlote, idcultivo, estado) VALUES ('$idPeriodo' , '$idLote', '$idCultivo', '$estado' )",null);             
	return true;
  }

  function updateCultivoLote($idCultivoLote,$idPeriodo, $idLote, $idCultivo, $estado) {
    $rows = self::$db->updateRow("UPDATE controlAgricola.cultivolote SET idperiodo = $idPeriodo, idlote = $idLote, idcultivo = $idCultivo, estado = $estado WHERE idcultivolote =$idCultivoLote",null);  
	return true;           
  }


}
?>

