<?php
declare(strict_types=1);


class Director{
    private int $id;
    private string $nombre;
    private string $apellido;
    private DateTime $f_nacimiento;
    private DateTimeImmutable $creado;
    private string $biografia;

    public function __construct(int $id, string $nombre, string $apellido, DateTime $f_nacimiento, DateTimeImmutable $creado, string $biografia){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->f_nacimiento = $f_nacimiento;
        $this->creado = $creado;
        $this->biografia = $biografia;
    }

    public function getId(): int{
        return $this->id;
    }
    public function getNombre(): string{
        return $this->nombre;
    }
    public function getApellido(): string{
        return $this->apellido;
    }
    public function getF_nacimiento(): DateTime{
        return $this->f_nacimiento;
    }
    public function getStringFecha(): string{
        return $this->f_nacimiento->format('d-m-Y');
    }
    public function getCreado(): DateTimeImmutable {
        return $this->creado;
    }
    public function getBiografia(): string {
        return $this->biografia;
    }
    public function getNombreCompleto(): string{
        return "Director: $this->nombre $this->apellido <br>";
    }
    public function toString(): string{
        return $this->getNombreCompleto()
        . 'Fecha de nacimiento: ' . $this->getStringFecha() . ' <br>'
        . "Biografía: $this->biografia <br>";
    }
}