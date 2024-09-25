<?php
declare(strict_types= 1);

abstract class Figura{
   protected float $area;
   abstract public function calcularArea(): void;
   
    public function mostrarArea(): string{
        return " El área de la figura es: " . $this->area;
    }
}

class Cuadrado extends Figura{
    private float $lado;
    public function __construct(float $lado){
        $this->lado = $lado;
        $this->calcularArea();
    }
    public function calcularArea(): void {
        $this->area = $this->lado * $this->lado;
    }
}

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
