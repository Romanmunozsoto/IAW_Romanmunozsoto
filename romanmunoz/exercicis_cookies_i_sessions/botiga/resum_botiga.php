<?php
session_start();
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
<p>No hay productos en la cistella.</p>
<?php else: ?>
<ul>
<?php foreach($_SESSION['cistella'] as $prod):
    $subtotal = $prod['preu'] * $prod['quantitat'];
    $total += $subtotal;
?>
<li><?php echo $prod['nom']." - Cantidad: ".$prod['quantitat']." - Subtotal: ".$subtotal." €"; ?></li>
<?php endforeach; ?>
</ul>
<p><strong>Total: <?php echo $total; ?> €</strong></p>

<form action="resum_botiga.php" method="POST">
<button type="submit" name="confirmar">Confirmar compra</button>
</form>
<?php endif; ?>

<?php
if(isset($_POST['confirmar'])){
    unset($_SESSION['cistella']);
    echo "<p>Compra confirmada! La cistella ha sido vaciada.</p>";
}
?>
<br>
<a href="index.html">Seguir comprando</a>
</body>
</html>
