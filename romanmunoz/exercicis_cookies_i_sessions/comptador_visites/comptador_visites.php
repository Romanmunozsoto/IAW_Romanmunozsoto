<?php
if(!isset($_COOKIE['visites'])){
    $visites = 1;
} else {
    $visites = $_COOKIE['visites'] + 1;
}

setcookie('visites', $visites, time()+86400);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>
<h2>Comptador de visites</h2>
<p>Has visitado esta página <?php echo $visites; ?> veces.</p>
</body>
</html>
