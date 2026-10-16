
<?php
require_once "config.php";
session_start();

if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit;
}

$error = isset($_GET["error"]);
?>

<?php require_once "partials/header.php"; ?>
<?php require_once "partials/nav.php"; ?>

<section class="formulario">
    <h2>Iniciar sesión</h2>

    <?php if ($error): ?>
        <p class="error">
            Usuario o contraseña incorrectos.
        </p>
    <?php endif; ?>

    <form action="controllers/middleware.php" method="POST">

        <label for="username">Nombre de usuario</label>
        <input
            type="text"
            id="username"
            name="username"
            required
        >

        <label for="password">Contraseña</label>
        <input
            type="password"
            id="password"
            name="password"
            required
        >

        <button type="submit">Entrar</button>

    </form>
</section>

<?php require_once "partials/footer.php"; ?>
