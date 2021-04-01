<?php

require ROOT."persistencia/DAO/interfaces/ListaDAO.php";

class ListaImpTextoDAO implements ListaDAO
{
    private const FILE = ROOT."persistencia/baseDeDatos/lista.txt";
    
    public function selectAll () : array {
        $file = fopen(Self::FILE,"r");
        $titulos = [];
        $linea = fgets($file);
        while ($linea = fgets($file)) { 
            $arrLinea = explode("|",$linea);
            array_push($titulos,$arrLinea[0]);
        }
        fclose($file);
        return $titulos;
    }

    public function select (int $i) : array {
        $file = fopen(Self::FILE,"r");
        $u = 1;
        while ($linea = fgets($file)) {
            if ($u == $i+1) {
                $item = explode("|",$linea);
            }
            $u++;
        }
        fclose($file);
        return $item;
    }

    public function delete (int $i) : void {
        $arr = $this->select($i);
        $item = $arr[0]."|".$arr[1]."|".$arr[2];

        $file = file_get_contents(Self::FILE);
        $file = str_replace($item,"",$file);
        file_put_contents(Self::FILE,$file);
    }
    
    public function insert (array $item) : void {

        $linea = "\n".$item[0]."|".$item[1]."|".$item[2];
        file_put_contents(Self::FILE,$linea,FILE_APPEND);
    }
}