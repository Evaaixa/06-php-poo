<?php

/** 
* Ejercicio 1
* Crea una clase llamada Persona
* Debe tener los siguientes atributos: nombre y edad
* Debe tener un método público llamado saludar que devuelva un string con el formato "Hola, mi nombre es: [nombre] y tengo [edad] años" */

/**
 * Ejercicio 2
 * Crea una clase llamada Coche
 * Debe tener tres propiedades privadas: marca, modelo y año
 * Debe tener un constructor que inicialice estas tres propiedades
 * Debe tener un método público llamado obtenerInformacion() que devuelva un string con el siguiente formato "Coche[marca] [modelo] del año [año]
 */
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
// 
class Coche{
    private string $marca;
    private string $modelo;
    private string $color;
    private int $agno;

    public function __construct(string $marca, string $modelo, string $color, int $agno){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->agno = $agno;
    }

    public function obtenerInformacion(): string{
        return "Coche $this->marca $this->modelo $this->color del año $this->agno";
    }
    
}
