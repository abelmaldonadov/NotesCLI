<?php

interface Nucleo
{
    public static function verLista () : array;
    public static function selItem (int $i) : Item;
    public static function delItem (int $i) : void;
    public static function insItem (Item $item) : void;
}