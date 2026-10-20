<?php

class Videojuego{
    private int $id;
    private string $titulo;
    private string $genero;
    private float $precio;
    private int $puntuacion;
    private string $imagen;
    private int $stock;

    public function __construct(int $id,string $titulo,string $genero,float $precio,int $puntuacion,string $imagen,int $stock)
        {
        $this->id=$id;
        $this->titulo=$titulo;
        $this->genero=$genero;
        $this->precio=$precio;
        $this->puntuacion=$puntuacion;
        $this->imagen=$imagen;
        $this->stock=$stock;
        }

    /**
     * Get the value of id
     */
    public function getId():int
    {
            return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): void
    {
            $this->id = $id;
    }
    
    /**
     * Get the value of titulo
     */
    public function getTitulo():string
    {
            return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): void
    {
            $this->titulo = $titulo;
    }

    /**
     * Get the value of genero
     */
    public function getGenero():string
    {
            return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): void
    {
            $this->genero = $genero;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio():float
    {
            return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): void
    {   
        if ($precio<=0){
        echo("el precio debe ser mayor a 0");
        }
        $this->precio = $precio;
            
    }

    /**
     * Get the value of puntuacion
     */
    public function getPuntuacion():int
    {
            return $this->puntuacion;
    }

    /**
     * Set the value of puntuacion
     */
    public function setPuntuacion($puntuacion):void
    {
        if ($puntuacion<=0 || $puntuacion>10){
            echo("la puntuacion debe de estar dentro de 0 y 10");
        }
         $this->puntuacion = $puntuacion;
    }


    /**
     * Get the value of imagen
     */
    public function getImagen():string
    {
            return $this->imagen;
    }

    /**
     * Set the value of imagen
     */
    public function setImagen($imagen):void
    {
            $this->imagen = $imagen;
    }

    /**
     * Get the value of stock
     */
    public function getStock():int
    {
            return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock($stock): void
    {
            $this->stock = $stock;
    }
    public function tieneStock():bool
    {
        return $this->stock >0;
    }
    public function aplicarDescuento($porcentaje):float
    {
        if ($porcentaje<=0 || $porcentaje>=100){
            echo("el descuento debe de estar entre 0 y 100");
        }
        return $this->precio * (1- $porcentaje /100);
    }

    public function filter($criterio):bool
    {
        if ($criterio=="recomendad0"){
            return $this->puntuacion >=8;
        }elseif($criterio=="oferta"){
            return $this->precio<=20;
        }elseif($criterio=="disponible"){
            return $this->stock>0;
        }
        return false;
    }

    public function pintarTarjeta():void
    {
    ?>
    <div class="tarjeta">
        <img 
        src="<?= $this->getImagen()?>" 
        alt="<?= $this->getTitulo()?>"
        >
        
        <h1><?= $this->getTitulo()?></h1>
        <p><?= $this->getGenero()?></p>
        <p><?= $this->getPuntuacion()?></p>
        <p><?= $this->getPrecio()?></p>
        <p><?= $this->getStock()?></p>

    </div>
    <?php 
        if($this->stock == 0){
            ?>
            <p class="sin-stock"><?= $this->stock?> sin stok</p>
            <?php
        }else{
            ?>
            <p class="con-stock"><?= $this->stock?> cuenta con stok</p>
            <?php
        }
        
    }

}

?>