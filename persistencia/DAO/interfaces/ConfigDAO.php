<?php

interface ConfigDAO
{
    public function selectAll () : array;
    public function select (int $i) : array;
}