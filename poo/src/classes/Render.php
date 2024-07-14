<?php

namespace Poo\Src\Classes;

class Render
{
    public static function render(
        string $actionPath,
        string $operacion,
        string $method = 'POST',
    ): void {
        echo "<h3 style='text-transform: uppercase'>$operacion</h3><br><form action='$actionPath' method='$method'><input type='text' name='a' placeholder='a'><br><input type='text' name='b' placeholder='b'><br><input type='hidden' name='operacion' value='$operacion'><input type='submit' value='calcular'></form>";
    }
}
