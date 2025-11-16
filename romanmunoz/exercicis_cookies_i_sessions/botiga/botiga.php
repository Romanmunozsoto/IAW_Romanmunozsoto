<?php
session_start();

if(!isset($_SESSION['cistella'])){
    $_SESSION['cistella'] = [];
}

if(!empty($_POST['nom1'])){
    $_SESSION['cistella'][] = [
        'nom' => $_POST['nom1'],
        'preu' => $_POST['preu1'],
        'quantitat' => $_POST['quantitat1']
    ];
}

if(!empty($_POST['nom2'])){
    $_SESSION['cistella'][] = [
        'nom' => $_POST['nom2'],
        'preu' => $_POST['preu2'],
        'quantitat' => $_POST['quantitat2']
    ];
}

header("Location: index.html");
exit();
?>
