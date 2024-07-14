<?php
// Calculadora PHP utilizando modulos
require("./src/modules/forms.php");
require("./src/views/views.php");

// Suma}
echo "<h3>Suma</h3>";
renderizar_vista_operacion('./src/modules/forms.php', 'suma');
// Resta    
echo "<h3>Resta</h3>";
renderizar_vista_operacion('./src/modules/forms.php', 'resta');
// Multiplicacion
echo "<h3>Multiplicacion</h3>";
renderizar_vista_operacion('./src/modules/forms.php', 'multiplicacion');
// Division
echo "<h3>Division</h3>";
renderizar_vista_operacion('./src/modules/forms.php', 'division');  


