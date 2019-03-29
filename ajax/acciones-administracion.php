<?php
  include("../class/class-conexion.php");
  
  $conexion = new Conexion();
  
  $sql="SELECT NOMBRE FROM TBL_AREAS";
  $resultado = $conexion->ejecutarInstruccion($sql);

  $resultado->nombre = "";

  $JsonResultados = JSON.encode($resultado);

  return $JsonResultados;
  
?>

