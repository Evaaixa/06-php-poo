<?php
include_once "modelos/autoload.php";
include_once "modelos/cuentaBancaria";
include_once "modelos/convertidorMoneda";

$miCuenta = new CuentaBancaria(1000);

// mostrar el saldo
echo "Saldo inicial " . $miCuenta->obtenerSaldo() . '<br>';
$cantidad = 500;

// hacer un depósito
if($miCuenta->depositar($cantidad)) {
    echo "Depósito realizado correctamente <br>";
}else{
    echo "El depósito no se ha realizado <br>";
}

// retirar
$cantidadRetirar = 500;
if($miCuenta->retirar($cantidadRetirar)) {
    echo "Retirada de cantidad realizada <br>";
}else{
    echo "No se pudo realizar la operación <br>";
}

// obtener saldo
echo "Tu saldo actual es: " . $miCuenta->obtenerSaldo() . '<br>';

echo "<h2>Convertidor de monedas</h2>";
$dolares = 100;
$euros = 100;

echo $dolares . " dólares son " . ConvertidorMoneda::dolaresaEuros($dolares) . ' Euros <br>';
echo $euros . " euros son " . ConvertidorMoneda::eurosaDolares($euros) . ' Dólares <br>';

ConvertidorMoneda::actualizarTasas(0.82, 1.22);
echo '<p>Nuevos valores</p>';
echo $dolares . " dólares son " . ConvertidorMoneda::dolaresaEuros($dolares) . ' Euros <br>';
echo $euros . " euros son " . ConvertidorMoneda::eurosaDolares($euros) . ' Dólares <br>';

echo '<p>Tasas de cambio actuales</p>';
$tasasActuales = ConvertidorMoneda::obtenerTasasActuales();

foreach($tasasActuales as $key => $valor) {
    echo $key . '' . $valor . '<br>';
}
