<?php

if (!isset($_COOKIE["majoredat"])) {
    header("Location: bodega.php");
    exit();
}

$majoredat = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

$preu = 39;
if ($moneda == "gbp") $preu = 34;
if ($moneda == "usd") $preu = 42;

$missatge = "";

if ($majoredat == "no") {
    if ($idioma == "cat") $missatge = "No et podem vendre alcohol si ets menor d’edat.";
    if ($idioma == "esp") $missatge = "No podemos vender alcohol si eres menor de edad.";
    if ($idioma == "eng") $missatge = "We cannot sell alcohol if you are underage.";
} else {
    if ($idioma == "cat") $missatge = "T’oferim el vi 'Les Terrasses' a un preu de $preu $moneda";
    if ($idioma == "esp") $missatge = "Te ofrecemos el vino 'Les Terrasses' por $preu $moneda";
    if ($idioma == "eng") $missatge = "We offer the wine 'Les Terrasses' for $preu $moneda";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Informació botiga</title>
</head>
<body>
    <h2>Informació</h2>
    <p><?php echo $missatge; ?></p>
</body>
</html>
