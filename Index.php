<?php

// DIRECTORIO RAIZ
define("ROOT",__DIR__."/");

require ROOT."/presentacion/dispositivos/Teclado.php";
require ROOT."/presentacion/dispositivos/Consola.php";
require ROOT."/dominio/entidades/Item.php";
require ROOT."/dominio/entidades/Core.php";

class Index
{
    public static function run () {
        
        $_salida = new Consola();
        $_entrada = new Teclado();

        while (true) {
            // MENÚ PRINCIPAL
            $_salida->outOpciones("MENÚ PRINCIPAL:",["CONSULTAR NOTAS","NUEVA NOTA","ELIMINAR NOTA"]);

            while (true) {
                // LISTENER
                $opc = $_entrada->leer();

                switch ($opc) {
                    case "1":
                        // CONSULTAR NOTAS
                        while (true) {
                            // LISTA COMPLETA
                            $lista = Core::verLista();
                            $_salida->outOpciones("SELECCIONE EL ELEMENTO A VISUALIZAR:",$lista);

                            while (true) {
                                // LISTENER
                                $opc = $_entrada->leer();

                                switch ($opc) {
                                    case "b": break 2;
                                    case "r": break 5;
                                    case "h": $_salida->outAyuda(); break;
                                    case "" : break;
                                    default:
                                        // VALIDAR OPCION VALIDA
                                        if ($opc < 1 || $opc > count($lista)) {
                                            $_salida->outError("OPCIÓN INVÁLIDA");
                                            break;
                                        }
                                        $item = Core::selItem($opc);
                                        $_salida->outAlerta($item->__toString());
                                }
                            }
                        }
                        break;

                    case "2":
                        // NUEVA NOTA
                        $item = new Item();

                        $_salida->outAlerta("INSERTE EL TITULO:");
                        $titulo = $_entrada->leer();
                        $item->setTitulo($titulo);

                        $_salida->outAlerta("INSERTE EL DETALLE:");
                        $detalle = $_entrada->leer();
                        $item->setDetalle($detalle);

                        $item->setFecha(date("Y-m-d"));

                        try {
                            Core::insItem($item);
                            $_salida->outAlerta($item->__toString());
                        } catch (Exception $e) {
                            $_salida->outError($e->getMessage());
                        }
                        break;
                    
                    case "3":
                        // ELIMINAR NOTA
                        while (true) {
                            // LISTA COMPLETA
                            $lista = Core::verLista();
                            $_salida->outOpciones("SELECCIONE EL ELEMENTO A ELIMINAR:",$lista);

                            while (true) {
                                // LISTENER
                                $opc = $_entrada->leer();

                                switch ($opc) {
                                    case "b": break 2;
                                    case "r": break 5;
                                    case "h": $_salida->outAyuda(); break;
                                    case "" : break;
                                    default:
                                        // VALIDAR OPCION VALIDA
                                        if ($opc < 1 || $opc > count($lista)) {
                                            $_salida->outError("OPCIÓN INVÁLIDA");
                                            break;
                                        }
                                        $_salida->outAlerta("CONFIRMA LA ELIMINACIÓN DEL ELEMENTO $opc [y / n]");
                                        $confirm = $_entrada->leer();
                                        if ($confirm == "y") {
                                            try {
                                                Core::delItem($opc);
                                                $_salida->outAlerta("ELEMENTO ELIMINADO");
                                            } catch (Exception $e) {
                                                $_salida->outError($e->getMessage());
                                            }
                                        }
                                }
                            }
                        }
                        break;

                    case "b": break 2;
                    case "r": break 2;
                    case "h": $_salida->outAyuda(); break;
                    case "" : break;
                    default: $_salida->outError("OPCIÓN INVÁLIDA"); break;
                }
            }
        }
    }
}

Index::run();