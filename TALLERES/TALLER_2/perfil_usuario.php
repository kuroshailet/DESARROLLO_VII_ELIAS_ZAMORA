<?php
// Definición de variables
$nombre_completo = "Elías Zamora Morales";
$edad = 27;
$correo = "elias.zamora@utp.ac.pa";
$telefono = "6845-4416";

// Definición de constante
define("OCUPACION", "Auditor Interno Operativo");

// Usando echo (concatenación con punto)
echo "Nombre completo: " . $nombre_completo . "<br>";

// Usando print (concatenación dentro de la misma instrucción)
print "Edad: " . $edad . " años<br>";

// Usando printf (formato con placeholders)
printf("Correo electrónico: %s<br>", $correo);

// Usando echo con comillas dobles (interpolación de variables)
echo "Teléfono: $telefono<br>";

// Usando echo con constante (concatenación con punto)
echo "Ocupación: " . OCUPACION . "<br><br>";

// Mostrando tipos y valores con var_dump
echo "<strong>var_dump:</strong><br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
?>
