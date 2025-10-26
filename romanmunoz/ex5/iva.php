<?php
if (isset($_POST['preu']) && isset($_POST['iva'])) {
    $preu = floatval($_POST['preu']);
    $iva = floatval($_POST['iva']);
    $total = $preu + ($preu * $iva / 100);

    echo "<h2>Resultat:</h2>";
    echo "<p>Preu base: $preu €</p>";
    echo "<p>IVA aplicat: $iva%</p>";
    echo "<p><strong>Total amb IVA: " . number_format($total, 2) . " €</strong></p>";
} else {
    echo "<p>Falten dades del formulari.</p>";
}
?>
