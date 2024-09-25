<?php
declare(strict_types= 1);

class PlanSubscripcion {
    // definición de constantes
    public const PLAN_BASICO = 'basico';
    public const PLAN_ESTANDARD = 'estandar';
    public const PLAN_PREMIUM = 'premium';

    private const PRECIO_BASICO = 9.99;
    private const PRECIO_ESTANDARD = 14.99;
    private const PRECIO_PREMIUM = 19.99;

    private string $planActual;

    public function __construct(string $planActual) {
        $array = [self::PLAN_BASICO, self::PLAN_ESTANDARD, self::PLAN_PREMIUM];
        if(in_array($planActual, $array)) {
            $this->planActual = $planActual;
        }else{
            throw new InvalidArgumentException('Plan no reconocido');
        }
    }
    public function obtenerPrecio(): float{
        switch($this->planActual){
            case self::PLAN_BASICO:
                return self::PRECIO_BASICO;
            case self::PLAN_ESTANDARD:
                return self::PRECIO_ESTANDARD;
            case self::PLAN_PREMIUM:
                return self::PRECIO_PREMIUM;
            default:
                throw new Exception('Plan no reconocido');
            }    
        }
    
    public static function obtenerTodosLosPlanes(): array{
        return [self::PLAN_BASICO, self::PRECIO_BASICO,
                self::PLAN_ESTANDARD, self::PRECIO_ESTANDARD,
                self::PLAN_PREMIUM, self::PRECIO_PREMIUM
            ];
        }
    }