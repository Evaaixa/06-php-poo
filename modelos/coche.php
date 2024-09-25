<?php
declare(strict_types= 1);

/**
 * Ejercicio 2
 * Crea una clase llamada Coche
 * Debe tener tres propiedades privadas: marca, modelo y año
 * Debe tener un constructor que inicialice estas tres propiedades
 * Debe tener un método público llamado obtenerInformacion() que devuelva un string con el siguiente formato "Coche[marca] [modelo] del año [año]
 */


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