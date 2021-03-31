<?php

require ROOT."persistencia/DAO/interfaces/ListaDAO.php";

class ListaImpTextoDAO implements ListaDAO
{
    
    
    public function selectAll () {
        $file = fopen(ROOT."persistencia/baseDeDatos/lista.txt","r");
        $titulos = [];
        $linea = fgets($file);
        while ($linea = fgets($file)) { 
            $arrLinea = explode("|",$linea);
            array_push($titulos,$arrLinea[0]);
        }
        fclose($file);
        return $titulos;
    }

    public function select ($i) {
        // 
    }

    public function delete ($i) {
        // 
    }
    
    public function insert ($item) {
        // 
    }
}