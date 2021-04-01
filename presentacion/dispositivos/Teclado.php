<?php

require ROOT."presentacion/interfaces/Entrada.php";

class Teclado implements Entrada
{
    public function leer () : string {
        echo "=> ";
        $input = readline();

        switch ($input) {
            case "q":
                die();

            default:
                return $input;
        }
    }
}