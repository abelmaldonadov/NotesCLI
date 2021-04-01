<?php

require ROOT."presentacion/interfaces/Entrada.php";

class Teclado implements Entrada
{
    public function leer () : string {
        echo "=> ";
        $input = readline();

        switch ($input) {
            case "exit":
                die();

            default:
                return $input;
        }
    }
}