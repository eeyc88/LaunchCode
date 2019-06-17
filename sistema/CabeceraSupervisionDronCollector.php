<?php

include_once('cabecerasupervisiondron.php');
include_once('Collector.php');

class CabeceraSupervisionDronCollector extends Collector
{
  
  function showCabeceraSupervisionDron() 
  {
    $rows = self::$db->getRows("select idcabeceradron, periodo, fecha, supervisor, idcultivolote, estado, valor from controlagricola.cabecerasupervisiondron ");        
    $arrayCabeceraSupervisionDron= array();        
    foreach ($rows as $c){
      $aux = new CabeceraSupervisionDron($c{'idcabeceradron'},$c{'periodo'},$c{'fecha'},$c{'supervisor'},$c{'idcultivolote'},$c{'estado'},$c{'valor'});
      array_push($arrayCabeceraSupervisionDron, $aux);
    }
    return $arrayCabeceraSupervisionDron;        
  }
 
  function deleteCabeceraSupervisionDron($id)
  {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.cabecerasupervisiondron where idcabeceradron = $id", null);
  }
  
  function insertCabeceraSupervisionDron($id, $idperiodo, $fecha, $supervisor, $idcultivolote, $estado) 
  {
    $rows = self::$db->insertRow("Insert into controlAgricola.cabecerasupervisiondron (idcabeceradron, periodo, fecha, supervisor, idcultivolote, estado) values ('$id','$idperiodo', '$fecha', '$supervisor', '$idcultivolote', '$estado' )" , null);             
  }

  function updateCabeceraSupervisionDron($id, $idperiodo, $idcultivolote, $fecha, $supervisor, $estado, $valor) 
  {
    $rows = self::$db->updateRow("Update controlAgricola.cabecerasupervisiondron set periodo = '$idperiodo', idcultivolote = '$idcultivolote', fecha = '$fecha', supervisor='$supervisor', estado = '$estado', valor = $valor where idcabeceradron =$id", null);             
  }
}
?>

