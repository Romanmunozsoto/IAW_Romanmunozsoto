<?php
session_start();

$preus = [
    'producte1' => 39,
    'producte2' => 25
];

foreach($preus as $prod => $preu){
    $quantitat = $_POST[$prod] ?? 0;
    if($quantitat > 0){
        if(!isset($_SESSION['cistella'][$prod])){
            $_SESSION['cistella'][$prod] = 0;
        }
        $_SESSION['cistella'][$prod] += $quantitat;
    }
}

header("Location: index.html");
exit();
?>
