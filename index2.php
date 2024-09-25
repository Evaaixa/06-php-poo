<?php
declare(strict_types= 1);
require 'modelos/perro.php';
require 'modelos/gato.php';
require 'modelos/figura.php';
require 'modelos/planSubscripcion.php';


$miPerro = new Perro('Tanya', 16, 'Cacri');

echo '<pre>';
var_dump($miPerro);
echo '</pre>';

echo $miPerro->toString();

// $miAnimal = new Animal('Kissy', 10,);
// echo $miAnimal->toString();

echo $miPerro->hacerSonido();

$miGato = new Gato('Lula', 2, true);
    echo '<br>';
    echo $miGato->toString();
    echo $miGato->hacerSonido();

$cuadrado = new Cuadrado(5);
echo '<br>';
echo $cuadrado->mostrarArea();

$miCirculo = new Circulo(5);
echo '<br>';
echo $miCirculo->mostrarArea();

echo '<br>';

// $planSubscripcion = new planSubscripcion('basico');
//     echo $planSubscripcion->obtenerPrecio();
//     echo '<br>';
$planBasico = new planSubscripcion(planSubscripcion::PLAN_BASICO);
    echo $planBasico->obtenerPrecio();
    echo '<br>';
$planEstandard = new planSubscripcion(planSubscripcion::PLAN_ESTANDARD);
    echo $planEstandard->obtenerPrecio();
    echo '<br>';
$planPremium = new planSubscripcion(planSubscripcion::PLAN_PREMIUM);
    echo $planPremium->obtenerPrecio();
    echo '<br>';

$planes = PlanSubscripcion::obtenerTodosLosPlanes();
echo '<br>';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
echo '<p>Los planes disponibles son:</p>';

foreach ($planes as $planSubscripcion => $precio){
    echo "$planSubscripcion: $precio <br>";
}