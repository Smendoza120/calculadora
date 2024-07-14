<?php

namespace Poo;
require("./src/classes/Render.php");

use Poo\Src\Classes\Render;

class Main
{
    public static function draw(): void
    {
        // Render Suma Form
        Render::render("./src/functions/forms.php", "suma");

        // Render Suma Form
        Render::render("./src/functions/forms.php", "resta");

        // Render Suma Form
        Render::render("./src/functions/forms.php", "multiplicacion");

        // Render Suma Form
        Render::render("./src/functions/forms.php", "division");
    }
}

Main::draw();