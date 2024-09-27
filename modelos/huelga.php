<?php
declare(strict_types=1);

class Huelga {
    private string $motivo;
    private DateTime $fecha;
    private int $asistencia;
    private string $lugar;
    private int $duracion;
    private string $organizacion;
    private int $riesgo;

    public function __construct(string $motivoHuelga, DateTime $fecha, int $asistencia, string $lugar, int $duracion, string $organizacion, int $riesgo)
    {
        $this->motivo = $motivoHuelga;
        $this->fecha = $fecha;
        $this->asistencia = $asistencia;
        $this->lugar = $lugar;
        $this->duracion = $duracion;
        $this->organizacion = $organizacion;
        $this->riesgo = $riesgo;
    }

    // Esto se debe hacer para
    // public function getMotivo(): string{
    //     return $this->motivo;
    // }
    // public function setMotivo($elMotivo):void{
    //     $this->motivo = $elMotivo;
    // }

    // 
    public function __get(string $name):mixed
    {
        return $this->$name;
    }

    public function __set($name, $value = 'Desconocido')
    {
        $this->$name = $value;
    }
}

$huelga = new Huelga('Cara dura', new DateTime(), 4, 'Granada', 1, 'Segunda fila', 1);

echo "Motivo de la huelga: " . $huelga->__get('motivo');
$huelga->__set('motivo', 'Flojera');
echo "Motivo de la huelga: " . $huelga->__get('motivo');
$huelga->__set(
    value: 'sueño',
    name: 'motivo');

echo '<br>';
echo "Motivo de la huelga: " . $huelga->__get('motivo');

$huelga->__set(name: 'duración', value: 3);
echo '<br>';
echo 'Duración de la huelga: ' . $huelga->__get('duracion');
