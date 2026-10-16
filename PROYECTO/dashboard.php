
<?php
require_once "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require_once "data.php";

$totalAnimes = count($animes);
$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>

<?php require_once "partials/header.php"; ?>
<?php require_once "partials/nav.php"; ?>

<section class="panel">

    <h2>Dashboard</h2>

    <p>
        Bienvenido,
        <strong><?= htmlspecialchars($username) ?></strong>.
    </p>

    <p>
        Tu rol es:
        <strong><?= htmlspecialchars($role) ?></strong>
    </p>

    <div class="estadistica">
        <h3>Total de animes</h3>
        <p class="numero"><?= $totalAnimes ?></p>
    </div>

    <?php if ($role === "ADMIN"): ?>

        <p>
            Tienes permisos de administrador.
        </p>

        <a class="boton" href="add_item.php">
            Añadir un anime
        </a>

    <?php else: ?>

        <p>
            Puedes consultar el catálogo de anime.
        </p>

    <?php endif; ?>

</section>

<?php require_once "partials/footer.php"; ?>
