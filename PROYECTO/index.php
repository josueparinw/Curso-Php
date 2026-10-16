
<?php
require_once "config.php";
session_start();

require_once "data.php";
require_once "controllers/tarjetas.php";
?>

<?php require_once "partials/header.php"; ?>
<?php require_once "partials/nav.php"; ?>

<section class="portada">
    <h2>Bienvenido a AnimeZone</h2>

    <p>
        Descubre tus animes favoritos, conoce sus géneros
        y explora las historias que han marcado el mundo del anime.
    </p>

    <a class="boton" href="catalogo.php">Ver catálogo</a>
</section>

<section>
    <h2>Animes destacados</h2>

    <div class="rejilla">

        <?php foreach ($animes as $anime): ?>

            <?php if ($anime["destacado"] === true): ?>

                <?php pintarTarjeta($anime); ?>

            <?php endif; ?>

        <?php endforeach; ?>

    </div>
</section>

<?php require_once "partials/footer.php"; ?>
