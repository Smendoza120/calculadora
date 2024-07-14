<?php
// Vistas de la calculadora
// Motor renderizador
function renderizar_vista_operacion( 
    string $actionPath,
    string $operacion,
    string $method = 'POST',
)
{
    echo "<form action='$actionPath' method='$method'><input type='text' name='a' placeholder='a'><br><input type='text' name='b' placeholder='b'><br><input type='hidden' name='operacion' value='$operacion'><input type='submit' value='calcular'></form>";
}
