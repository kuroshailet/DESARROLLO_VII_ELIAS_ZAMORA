<?php
// Leer inventario desde archivo JSON
function leerInventario($archivo) {
    if (!file_exists($archivo)) {
        die("El archivo $archivo no existe.\n");
    }
    $contenido = file_get_contents($archivo);
    return json_decode($contenido, true);
}

// Ordenar inventario alfabéticamente por nombre del producto
function ordenarInventario(&$inventario) {
    usort($inventario, function($a, $b) {
        return strcmp($a["nombre"], $b["nombre"]);
    });
}

// Mostrar resumen del inventario (nombre, precio, cantidad)
function mostrarInventario($inventario) {
    echo "Resumen del Inventario</br>\n";
    foreach ($inventario as $producto) {
        echo "- {$producto['nombre']} | Precio: $ {$producto['precio']} | Cantidad: {$producto['cantidad']}</br>\n";
    }
}

// Calcular el valor total del inventario
function valorTotalInventario($inventario) {
    return array_sum(array_map(function($p) {
        return $p["precio"] * $p["cantidad"];
    }, $inventario));
}

// Generar informe de productos con stock bajo (menos de 5 unidades)
function stockBajo($inventario) {
    return array_filter($inventario, function($p) {
        return $p["cantidad"] < 5;
    });
}


// Script Principal
$archivo = "inventario.json";
$inventario = leerInventario($archivo);
ordenarInventario($inventario);
mostrarInventario($inventario);

$total = valorTotalInventario($inventario);
echo "\n</br>Valor total del inventario: $ " . number_format($total, 2) . "</br>\n";

echo "\n</br>Productos con Stock Bajo (menos de 5 unidades)</br>\n";
$productosBajos = stockBajo($inventario);
if (empty($productosBajos)) {
    echo "No hay productos con stock bajo.\n";
} else {
    foreach ($productosBajos as $p) {
        echo "- {$p['nombre']} (Cantidad: {$p['cantidad']})</br>\n";
    }
}
?>
