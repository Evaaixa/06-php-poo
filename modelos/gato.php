<?php
declare(strict_types= 1);
require_once 'animal.php';

class Gato extends Animal{
    private bool $esDomestico;

    public function __construct(string $nombre, int $edad, bool $esDomestico) {
        parent::__construct($nombre, $edad);
        $this->esDomestico = $esDomestico;
    }
    public function hacerSonido(): string{
        return " Miau miau...";
    }
    public function esDomestico(): string{
        if($this->esDomestico = true) {
            return "Es un animal doméstico";
        }else{
            return "No es un animal doméstico";
        }
    }
    public function toString(): string{
        $domesticoString = $this->esDomestico ? "si" : "no";
        return parent::toString() .", {$domesticoString} es un animal doméstico.";
    }
}

