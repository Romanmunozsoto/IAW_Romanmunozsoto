<?php
session_start();

$preus = ['producte1'=>39, 'producte2'=>25];
$nom_productes = ['producte1'=>'Vi Les Terrasses','producte2'=>'Vi Can Blau'];

$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resum de la compra</title>
</head>
<body>
<h2>Resum de la compra</h2>

<?php if(!isset($_SESSION['cistella']) || empty($_SESSION['cistella'])): ?>
    <p>No has afegit cap producte.</p>
<?php else: ?>
    <ul>
    <?php foreach($_SESSION['cistella'] as $prod => $quantitat):
        $subtotal = $quantitat * $preus[$prod];
        $total += $subtotal;
    ?>
        <li><?php echo $nom_productes[$prod] . " - Quantitat: $quantitat - Subtotal: $subtotal €"; ?></li>
    <?php endforeach; ?>
    </ul>

    <p><strong>Total: <?php echo $total; ?> €</strong></p>

    <form action="resum_compra.php" method="POST">
        <button type="submit" name="confirmar">Confirmar compra</button>
    </form>
<?php endif; ?>

<?php

if(isset($_POST['confirmar'])){
    unset($_SESSION['cistella']);
    echo "<p>Compra confirmada! La cistella s'ha buidat.</p>";
}
?>
<br>
<a href="index.html">Seguir comprando</a>
</body>
</html>
