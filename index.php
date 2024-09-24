<?php
declare(strict_types= 1);
include 'modelos/pelicula.php';
include 'modelos/director.php';
include 'ejercicios.php';

$fecha = new DateTime('20-12-1950');
$creado = new DateTimeImmutable();

$director1 = new Director(1, "Martin", "Scorsese", $fecha, $creado, 'Muchas películas, de pequeño quería ser panadero');

// Crear un objeto o instancia de la clase película
$pelicula1 = new Pelicula(1, 'Papillon', 33, $director1);

echo $pelicula1->toString();

echo $pelicula1->getDirector()->toString();
echo $pelicula1->getDirector()->getNombreCompleto();

$persona1 = new Persona('Pablo', 35);
echo $persona1->getSaludo();

$coche1 = new Coche('Mercedes', 'AX212', 'verde', 2005);
echo $coche1->obtenerInformacion();