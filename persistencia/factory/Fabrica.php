<?php

require ROOT."persistencia/DAO/implement/texto/ListaImpTextoDAO.php";
require ROOT."persistencia/DAO/implement/texto/ConfigImpTextoDAO.php";

Class Fabrica
{
    public static function getListaDAO () {
        return new ListaImpTextoDAO();
    }

    public static function getConfigDAO () {
        return new ConfigImpTextoDAO();
    }
}