<?php
declare(strict_types= 1);

class Circulo extends Figura{
    protected float $radio;

    public function __construct(float $radio){
        $this->radio = $radio;
        $this->calcularArea();
    }

    public function calcularArea():void{
        // $this->area = pi() * $this->radio * $this->radio;
        // $this->area = pi() * ($this->radio ** 2);
        $this->area = pi() * pow($this->radio, 2);
    }
}