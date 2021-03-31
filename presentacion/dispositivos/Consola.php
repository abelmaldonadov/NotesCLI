<?php

require ROOT."presentacion/interfaces/Salida.php";

class Consola implements Salida
{
    // 35 GUIONES
    private const LINEA = "-----------------------------------\n";

    public function outAlerta ($texto) {
        echo Self::LINEA;
        echo $texto;
        echo Self::LINEA;
    }

    public function outTexto ($texto) {
        echo $texto;
    }

    public function outOpciones ($arrOpc) {
        Self::LINEA;
        for ($i = 0 ; $i < count($arrOpc) ; $i++) { 
            echo "$i :  $arrOpc[$i] \n";
        }
        Self::LINEA;
    }

    public function outAyuda () {
        Self::LINEA;
        echo "[return] : Volver al menú principal. \n[exit]   : Salir del programa. \n";
        Self::LINEA;
    }
}