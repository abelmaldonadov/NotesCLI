<?php

require ROOT."dominio/interfaces/Nucleo.php";
require ROOT."persistencia/factory/fabrica.php";

class Core implements Nucleo
{
    public static function verLista () {
        $dao = Fabrica::getListaDAO();
        $lista = $dao->selectAll();
        return $lista;
    }

    public static function selItem ($i) {
        $detalle = [
            ["sadds","asdas"],
            ["sadds","asdas"],
            ["sadds","asdas"]
        ];
        return $detalle;
    }

    public static function delItem ($i) {
        //
    }

    public static function insItem ($item) {
        //
    }
}