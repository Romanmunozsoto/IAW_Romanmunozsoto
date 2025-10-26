<?php
$eur_usd = 1.16; 
$usd_eur = 0.86; 

$valor = (float)$_GET['valor'];
$conversion_type = $_GET['convertir'];

if ($conversion_type == 'a_dollars') {
    $resultado = $valor * $eur_usd;
    echo "$valor € son $resultado USD";
} else {
    $resultado = $valor * $usd_eur;
    echo "$valor USD son $resultado €";
}
?>