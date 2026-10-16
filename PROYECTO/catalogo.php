
<?php
require_once "config.php";
session_start();

require_once "data.php";
require_once "controllers/tarjetas.php";

$animesAccion = [];

foreach ($animes as $anime) {
    if (strpos($anime["genero"], "Acción") !== false) {
        $animesAccion[] = $anime;
    }
}
?>

<?php require_once "partials/header.php"; ?>
<?php require_once "partials/nav.php"; ?>

<section>
    <h2>Catálogo completo</h2>

    <div class="rejilla">

        <?php foreach ($animes as $anime): ?>

            <?php pintarTarjeta($anime); ?>

        <?php endforeach; ?>

    </div>
</section>

<section>
    <h2>Animes de acción</h2>

    <div class="rejilla">

        <?php foreach ($animesAccion as $anime): ?>

            <?php pintarTarjeta($anime); ?>

        <?php endforeach; ?>

    </div>
</section>

<?php require_once "partials/footer.php"; ?>
