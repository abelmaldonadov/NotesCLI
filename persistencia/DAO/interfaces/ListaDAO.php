<?php

interface ListaDAO
{
    public function selectAll ();
    public function select ($i);
    public function delete ($i);
    public function insert ($item);
}