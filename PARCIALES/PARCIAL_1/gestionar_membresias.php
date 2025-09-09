<?php
include 'funciones_gimnasio.php';

$membresias= [
    "basica" => 80,
    "premium" => 120,
    "vip" => 180,
    "familiar" => 250,
    "corporativa" => 180
];

$miembros= [
    "Juan Perez" => ["tipo" => "premium", "antiguedad" => 15],
    "Ana Garcia" => ["tipo" => "basica", "antiguedad" => 2],
    "Carlos Lopez" => ["tipo" => "vip", "antiguedad" => 30],
    "Maria Rodriguez" => ["tipo" => "familiar", "antiguedad" => 8],
    "Luis Martinez" => ["tipo" => "coporativa", "antiguedad" => 18]
];


// $jsonPersona = json_encode($miembros);
// echo "</br>Array asociativo:</br>$jsonPersona</br>";





$longitud = 0;
while (isset($miembros[$longitud])) {
    $jsonMiembros = json_encode($miembros);
    echo $promocion = calcular_promocion($jsonMiembros[$longitud][1]);
    // $seguro = calcular_seguro_medico($cuota);
    // echo calcular_cuota_final($cuota, $promocion, $seguro);
    ++$longitud;
  }


?>