<?php
require_once __DIR__."/../config.php";

function pintarTarjeta($item) {
?>
<div class="tarjeta">
    <img 
    src="<?=$item["imagen"]?>"
    alt="<?=$item["titulo"]?>"
    >
    <div class="contenido-tarjeta">
        <h3><?=$item["titulo"]?></h3>
        <p>
            <strong>Génnero</strong>
            <?=$item["genero"]?>
        </p>
        <p>
            <strong>año</strong>
            <?=$item["anio"]?>
        </p>
        <p>
            <strong>Descripción</strong>
            <?=$item["descripcion"]?>
        </p>
        <?php
        if($item["destacado"]): ?>
        <span class="etiqueta">Destacado</span>
        <?php
        endif;
        ?>
    </div>
</div>
<?php
}
?>