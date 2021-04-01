<?php

require ROOT."presentacion/interfaces/Salida.php";

class Consola implements Salida
{
    // 50 POS
    private const LINEA = "--------------------------------------------------\n";
    private const CAJA  = "==================================================\n";
    private const ERROR = "**************************************************\n";

    public function outAlerta (string $texto) : void {
        echo "\n";
        echo Self::CAJA;
        echo "$texto \n";
        echo Self::CAJA;
        echo "\n";
    }

    public function outTexto (string $texto) : void {
        echo "\n";
        echo "$texto \n";
        echo "\n";
    }

    public function outOpciones (string $titulo, array $arrOpc) : void {
        echo "\n";
        echo Self::CAJA;
        echo "$titulo \n";
        echo Self::LINEA;
        for ($i = 0 ; $i < count($arrOpc) ; $i++) { 
            echo ($i+1)." :  $arrOpc[$i] \n";
        }
        echo Self::CAJA;
        echo "\n";
    }

    public function outAyuda () : void {
        echo "\n";
        echo Self::CAJA;
        echo "[back]   : Volver a ver el menú. \n[return] : Volver al menú principal. \n[exit]   : Salir del programa. \n";
        echo Self::CAJA;
        echo "\n";
    }

    public function outError (string $texto) : void {
        echo "\n";
        echo Self::ERROR;
        echo "$texto \n";
        echo Self::ERROR;
        echo "\n";
    }
}