<?php
declare(strict_types= 1);

/** 
* Ejercicio 1
* Crea una clase llamada Persona
* Debe tener los siguientes atributos: nombre y edad
* Debe tener un método público llamado saludar que devuelva un string con el formato "Hola, mi nombre es: [nombre] y tengo [edad] años" */

class Persona {
    private string $nombre;
    private int $edad;

public function __construct(string $nombre, int $edad ){
    $this->nombre = $nombre;
    $this->edad = $edad;
}
public function getSaludo(): string{
    return "Nombre $this->nombre $this->edad <br>";
}
public function toString(): string{
    return $this->getSaludo()
    . 'Hola, mi nombre es: ' . $this->nombre .'y tengo'. $this->edad .'años';
}
}