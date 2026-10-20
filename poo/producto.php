<?php

class Producto
{
    private string $nombre;
    protected float $precio;
    protected string $categoria;
    protected bool $estaPublicado;
    protected int $puntuacion;

    public function __construct(string $nombre,float $precio,$categoria, $estaPublicado,$puntuacion){
        this->nombre=$nombre;
        

}
}


?>