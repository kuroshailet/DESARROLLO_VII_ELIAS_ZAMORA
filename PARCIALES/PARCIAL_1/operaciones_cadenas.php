<?php

contar_palabras_repetidas("tres por tres es nueve");

// echo capitalizar_palabras("prueba es una prueba");

function contar_palabras_repetidas($texto){

  $palabras = explode(" ", $texto);
  $contador = 0;
  $resultado;
  
  for($i = 0; $i <= count($palabras) - 1; $i++){
    echo "<br>$palabras[$i]";
    if ($palabras[0] == $palabras[$i]){
      $resultado[i] = $palabras[$i];
      ++$contador;
    }
  } 

  echo "<br>$contador";

}

function capitalizar_palabras($texto){
  $palabras = explode(" ", $texto);
  $resultado;

  for($i = 0; $i < count($palabras); $i++){
    $palabras[$i];
    $primera = substr($palabras[$i], 0 , 1);
    $resto = substr($palabras[$i], 1 ,strlen($palabras[$i]) - 1);
    $resultado[$i] = strtoupper($primera) . strtolower($resto);
  }

  

  return implode(" ", $resultado);

}


?>