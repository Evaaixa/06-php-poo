<?php
declare(strict_types= 1);

abstract class Figura{
   protected float $area;
   abstract public function calcularArea(): void;
   
    public function mostrarArea(): string{
        return " El área de la figura es: " . $this->area;
    }
}
