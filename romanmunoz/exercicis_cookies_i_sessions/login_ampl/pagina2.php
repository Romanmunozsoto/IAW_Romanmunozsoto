<?php
session_start();
if(!isset($_SESSION['usuari'])){
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Página 2</title>
</head>
<body>
<p>Bienvenido, <strong><?php echo $_SESSION['usuari']; ?></strong> 
<a href="logout.php">[Cerrar sesión]</a></p>
<a href="pagina1.php">Volver a Página 1</a>
</body>
</html>
