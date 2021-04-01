<?php

interface ListaDAO
{
    public function selectAll () : array;
    public function select (int $i) : array;
    public function delete (int $i) : void;
    public function insert (array $item) : void;
}