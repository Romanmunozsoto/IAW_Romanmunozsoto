<?php
date_default_timezone_set('Europe/Madrid');
$hora = date("H:i");
$hora_num = date("H");

if ($hora_num >= 5 && $hora_num < 14) {
    $salutacio = "Bon dia";
} elseif ($hora_num >= 14 && $hora_num < 19) {
    $salutacio = "Bona tarda";
} else {
    $salutacio = "Bona nit";
}

echo "<h2>$salutacio!</h2>";
echo "<p>Hora del servidor: $hora</p>";
?>
