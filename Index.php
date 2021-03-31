<?php

// DIRECTORIO RAIZ
define("ROOT",__DIR__."/");

require ROOT."/presentacion/dispositivos/Teclado.php";
require ROOT."/presentacion/dispositivos/Consola.php";
require ROOT."/dominio/Core.php";

class Index
{
    public static function run () {
        
        $_salida = new Consola();
        $_entrada = new Teclado();

        while (true) {
            // MENÚ PRINCIPAL
            $_salida->outAlerta("Menú principal:");
            $_salida->outOpciones(["Consultar","Escribir"]);

            while (true) {
                // LISTENER
                $opc = $_entrada->leer();

                switch ($opc) {
                    case 0:
                        while (true) {
                            // LISTA COMPLETA
                            $_salida->outAlerta("Lista:");
                            $_salida->outOpciones(Core::verLista());

                            while (true) {
                                // LISTENER
                                $opc = $_entrada->leer();

                                switch ($opc) {
                                    case "back":
                                        break 2;

                                    case "return":
                                        break 5;
                
                                    case "help":
                                        $_salida->outAyuda();
                                        break;
                                    
                                    default:
                                        // $_salida->outAlerta(Core::verItem($opc));
                                        $_salida->outAlerta("Detalle de item por implementar");
                                        break;
                                }
                            }
                        }
                        break;

                    case 1:
                        $_salida->outAlerta("Insertar elemento por implementar");
                        break;

                    case "back":
                        break 2;

                    case "return":
                        break 2;

                    case "help":
                        $_salida->outAyuda();
                        break;

                    default:
                        $_salida->outError("Opción inválida");
                        break;
                }
            }
        }
    }
}

Index::run();