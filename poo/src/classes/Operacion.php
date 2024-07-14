<?php

namespace Poo\Src\Classes;

class Operacion
{
    public static function sumar(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function restar(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function multiplicar(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function division(float $a, float $b): string
    {
        return number_format($a + $b, 2);
    }
}