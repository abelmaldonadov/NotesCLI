<?php

require ROOT."presentacion/interfaces/Salida.php";

class Consola implements Salida
{
    // 50 GUIONES
    private const LINEA = "--------------------------------------------------\n";

    public function outAlerta ($texto) {
        echo "\n";
        echo Self::LINEA;
        echo "$texto \n";
        echo Self::LINEA;
    }

    public function outTexto ($texto) {
        echo "$texto \n";
    }

    public function outOpciones ($arrOpc) {
        // echo Self::LINEA;
        for ($i = 0 ; $i < count($arrOpc) ; $i++) { 
            echo "$i :  $arrOpc[$i] \n";
        }
        echo Self::LINEA;
    }

    public function outAyuda () {
        echo "\n";
        echo Self::LINEA;
        echo "[back] : Volver a ver el menú. \n[return] : Volver al menú principal. \n[exit]   : Salir del programa. \n";
        echo Self::LINEA;
    }

    public function outError ($texto) {
        echo "\n";
        echo "$texto \n";
    }
}