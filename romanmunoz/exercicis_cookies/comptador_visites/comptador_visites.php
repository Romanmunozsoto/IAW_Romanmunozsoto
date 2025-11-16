<?php

if (!isset($_COOKIE["visites"])) {
    $visites = 1;
} else {
    $visites = $_COOKIE["visites"] + 1;
}

setcookie("visites", $visites, time() + 86400);

$missatge = "";
if ($visites >= 10) {
    $missatge = "Oferta exclusiva sols per a tu! Utilitza el codi <strong>BOTIGA50</strong> per obtenir un 50% de descompte en les teves primeres compres a la botiga";
} else if ($visites >= 5) {
    $missatge = "Oferta exclusiva! Utilitza el codi <strong>BOTIGA20</strong> per obtenir un 20% de descompte en les teves primeres compres a la botiga";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>
    <h2>Comptador de visites</h2>
    <p>Has visitat aquesta pàgina <?php echo $visites; ?> vegades.</p>

    <?php if ($missatge != "") { ?>
        <p style="color:green;"><?php echo $missatge; ?></p>
    <?php } ?>

    <form action="" method="post">
        <label for="descompte">Introdueix el codi de descompte:</label>
        <input type="text" id="descompte" name="descompte" required>
        <button type="submit">Comprar</button>
    </form>
</body>
</html>
