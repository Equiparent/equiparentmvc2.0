<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// Útil para ver los contenidos de un array
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";

// Acceder a un elemento de un array
echo $carrito[1]; // forma de recorrer una base de datos (indice)

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir elemento al inicio...
array_unshift($carrito, 'Smartwatch');

// Útil para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';