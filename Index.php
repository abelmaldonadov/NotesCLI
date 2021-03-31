<?php

// DIRECTORIO RAIZ
define("ROOT",__DIR__."/");

require ROOT."/presentacion/dispositivos/Consola.php";
require ROOT."/dominio/Core.php";

class Index
{
    public static function run () {
        
        $_salida = new Consola();

        while (true) {
            // MENÚ PRINCIPAL
            $_salida->outAlerta("Opciones \n1: Consultar \n2: Escribir \n");

            while (true) {
                // LISTENER
                $opc = readline();

                switch ($opc) {
                    case 1:
                        echo "Lista: \n";
                        $lista = Core::verLista();
                        $_salida->outOpciones($lista);
        
                        break;
                    
                    case 2:
                        echo "escribir \n";
                        break;
                    
                    case "return":
                        break 2;
                    
                    case "exit":
                        break 3;
                        die();
                    
                    case "help":
                        $_salida->outAyuda();
                        break ;
                    
                    default:
                        echo "inválido \n";
                        break 2;
                }
            }
        }
    }
}

Index::run();