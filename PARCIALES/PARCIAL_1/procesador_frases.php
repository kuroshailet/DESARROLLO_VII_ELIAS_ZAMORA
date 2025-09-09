<?php
include 'operaciones_cadenas.php';
echo "<h1> Resultados de procesador de frases </h1>";
$frases = ["Prueba esto es una prueba", "hola mundo", "Me gusta PHP", "mi nombre es Elias"];
$longitud = 0;


  while (isset($frases[$longitud])) {
    echo "<p>" . capitalizar_palabras($frases[$longitud]) . "</p>";
    ++$longitud;
  }


?>