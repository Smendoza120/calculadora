<?php

namespace Poo\Src\Functions;
require("../classes/Operacion.php");

use Poo\Src\Classes\Operacion;

// Operaciones de la calculadora
$a = (int) $_POST['a'];
$b = (int) $_POST['b'];
$op = $_POST['operacion'];

switch ($op) {
    case 'suma':
        $resultado = Operacion::sumar($a, $b);
        echo "La SUMA entre $a y $b es: $resultado";
        break;

    case 'resta':
        $resultado = Operacion::restar($a, $b);
        echo "La RESTA entre $a y $b es: $resultado";
        break;

    case 'multiplicacion':
        $resultado = Operacion::multiplicar($a, $b);
        echo "La MULTIPLIACION entre $a y $b es: $resultado";
        break;

    case 'division':
        $resultado = Operacion::division($a, $b);
        echo "La DIVISION entre $a y $b es: $resultado";
        break;
}
