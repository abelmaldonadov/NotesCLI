<?php

interface Salida
{
    public function outAlerta (string $texto) : void;
    public function outTexto (string $texto) : void;
    public function outOpciones (string $titulo, array $arrOpc) : void;
    public function outAyuda () : void;
    public function outError (string $texto) : void;
}