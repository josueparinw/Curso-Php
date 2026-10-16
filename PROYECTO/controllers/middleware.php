
<?php
require_once __DIR__ . "/../config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

require_once __DIR__ . "/../data.php";

$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

$usuarioEncontrado = false;

foreach ($usuarios as $usuario) {

    if (
        $usuario["username"] === $username &&
        $usuario["password"] === $password
    ) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado !== false) {

    session_regenerate_id(true);

    $_SESSION["username"] = $usuarioEncontrado["username"];
    $_SESSION["role"] = $usuarioEncontrado["role"];

    header("Location: ../dashboard.php");
    exit;

} else {

    header("Location: ../login.php?error=1");
    exit;
}
?>
