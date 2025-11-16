<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>
<body>
    <h2>Página 1</h2>

    <p>Bienvenido, <strong><?php echo $_SESSION['usuari']; ?></strong></p>
    <a href="logout.php">Cerrar sesión</a>
    <br><br>
    <a href="pagina2.php">Ir a Página 2</a>
</body>
</html>
