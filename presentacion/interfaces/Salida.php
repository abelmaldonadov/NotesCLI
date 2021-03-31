<?php

interface Salida
{
    public function outAlerta ($texto);
    public function outTexto ($texto);
    public function outOpciones ($arrOpc);
    public function outAyuda ();
}