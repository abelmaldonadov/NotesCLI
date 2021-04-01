<?php

require ROOT."dominio/interfaces/Nucleo.php";
require ROOT."persistencia/factory/fabrica.php";

class Core implements Nucleo
{
    public static function verLista () : array {
        $dao = Fabrica::getListaDAO();
        $lista = $dao->selectAll();
        return $lista;
    }

    public static function selItem (int $i) : Item {
        $dao = Fabrica::getListaDAO();
        $elem = $dao->select($i);

        //DEPURAR
        for ($i = 0 ; $i < count($elem) ; $i++) {
            $elem[$i] = trim($elem[$i]);
        }

        $item = new Item();
        $item->crear($elem);
        return $item;
    }

    public static function delItem (int $i) : void {
        $dao = Fabrica::getListaDAO();
        $dao->delete($i);
    }

    public static function insItem (Item $item) : void {
        $dao = Fabrica::getListaDAO();
        $dao->insert($item->toArray());
    }
}