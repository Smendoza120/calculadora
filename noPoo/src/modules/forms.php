<?php
// Operaciones de la calculadora
$a = (int) $_POST['a'];
$b = (int) $_POST['b'];
$op = $_POST['operacion'];

// Suma
function suma(int $a, int $b): int
{
    return $a + $b;
}

// Resta
function resta(int $a, int $b): int
{
    return $a - $b;
}

// Multiplicacion
function multiplicacion(int $a, int $b): int
{
    return $a * $b;
}

// Division
function division(float $a, float $b): string
{
    return number_format($a / $b, 2);
}

switch ($op) {
    case 'suma':
        $resultado = suma($a, $b);
        echo "La SUMA entre $a y $b es: $resultado";
        break;

    case 'resta':
        $resultado = resta($a, $b);
        echo "La RESTA entre $a y $b es: $resultado";
        break;

    case 'multiplicacion':
        $resultado = multiplicacion($a, $b);
        echo "La MULTIPLIACION entre $a y $b es: $resultado";
        break;

    case 'division':
        $resultado = division($a, $b);
        echo "La DIVISION entre $a y $b es: $resultado";
        break;
}
