<?php

class Item
{
    private const LINEA = "--------------------------------------------------\n";

    private $titulo;
    private $detalle;
    private $fecha;

    public function crear (array $item) : void{
        $this->titulo   = $item[0];
        $this->detalle  = $item[1];
        $this->fecha    = $item[2];
    }

    public function setTitulo (string $titulo) : void {
        $this->titulo = $titulo;
    }

    public function setDetalle (string $detalle) : void {
        $this->detalle = $detalle;
    }

    public function setFecha (string $fecha) : void {
        $this->fecha = $fecha;
    }

    public function getTitulo () : string {
        return $this->titulo;
    }

    public function getDetalle () : string {
        return $this->detalle;
    }

    public function getFecha () : string {
        return $this->fecha;
    }

    public function toArray () : array {
        $arr = [
            $this->titulo,
            $this->detalle,
            $this->fecha
        ];
        return $arr;
    }

    public function __toString () : string {
        $str  = "TITULO : \n";
        $str .= Self::LINEA;
        $str .= "$this->titulo \n";
        $str .= "\n";
        $str .= "DETALLE : \n";
        $str .= Self::LINEA;
        $str .= "$this->detalle \n";
        $str .= "\n";
        $str .= "FECHA : \n";
        $str .= Self::LINEA;
        $str .= "$this->fecha";
        return $str;
    }
}