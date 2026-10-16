
<?php
require_once "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION["role"] !== "ADMIN") {
    header("Location: dashboard.php");
    exit;
}

require_once "data.php";
require_once "controllers/tarjetas.php";

$nuevoAnime = null;
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = (int)($_POST["id"] ?? 0);
    $titulo = trim($_POST["titulo"] ?? "");
    $genero = trim($_POST["genero"] ?? "");
    $anio = (int)($_POST["anio"] ?? 0);
    $descripcion = trim($_POST["descripcion"] ?? "");
    $imagen = trim($_POST["imagen"] ?? "");
    $destacado = isset($_POST["destacado"]);

    if (
        $id <= 0 ||
        $titulo === "" ||
        $genero === "" ||
        $anio <= 0 ||
        $descripcion === "" ||
        $imagen === ""
    ) {
        $error = "Debes completar todos los campos obligatorios.";
    } else {

        $nuevoAnime = [
            "id" => $id,
            "titulo" => $titulo,
            "genero" => $genero,
            "anio" => $anio,
            "descripcion" => $descripcion,
            "imagen" => RUTA_IMG. $imagen,
            "destacado" => $destacado
        ];
    }
}
?>

<?php require_once "partials/header.php"; ?>
<?php require_once "partials/nav.php"; ?>

<section class="formulario">

    <h2>Añadir un anime</h2>

    <?php if ($error !== ""): ?>
        <p class="error">
            <?= $error ?>
        </p>
    <?php endif; ?>

    <form action="add_item.php" method="POST">

        <label for="id">ID</label>
        <input type="number" id="id" name="id" min="1" required>

        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="genero">Género</label>
        <input type="text" id="genero" name="genero" required>

        <label for="anio">Año</label>
        <input type="number" id="anio" name="anio" min="1" required>

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

        <label for="imagen">Insertar la imagen</label>
        <input
            type="file"
            id="imagen"
            name="imagen"
            placeholder="Anime.png"
            required
        >

        <label class="check">
            <input type="checkbox" name="destacado" value="1">
            Marcar como destacado
        </label>

        <button type="submit">Añadir anime</button>

    </form>

</section>

<?php if ($nuevoAnime !== null): ?>

    <section>
        <h2>Anime recibido correctamente</h2>

        <div class="rejilla">
            <?php pintarTarjeta($nuevoAnime); ?>
        </div>
    </section>

<?php endif; ?>

<?php require_once "partials/footer.php"; ?>
