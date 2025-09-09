<?php
function calcular_promocion($antiguedad_meses){
  $promocion;
  if($antiguedad_meses >= 0 && $antiguedad_meses < 3){
    $promocion = 0;
  }else if ($antiguedad_meses >= 3 && $antiguedad_meses < 12){
    $promocion = 8;
  }else if ($antiguedad_meses >= 13 && $antiguedad_meses < 24){
    $promocion = 12;
  } else if ($antiguedad_meses > 24){
    $promocion = 20;
  } else {
    $promocion = 0;
  }
  return $promocion;
}

function calcular_seguro_medico($cuota_base){
  return $seguro_medico = $cuota_base * 0.05;
}

function calcular_cuota_final($cuota_base, $descuento_porcentaje, $seguro_medico){
  $descuento = $cuota_base * $descuento_porcentaje / 100;
  $cuota_final = $cuota_base - $descuento + $seguro_medico;
  return $cuota_final;
}

?>
