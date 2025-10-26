<?php
if (isset($_POST['estil'])) {
    $estil = $_POST['estil'];

    switch ($estil) {
        case 'rock':
            $missatge = "T’agrada el Rock! Ets una persona amb molta energia!";
            break;
        case 'pop':
            $missatge = "El Pop es alegre i divertit, bona tria!";
            break;
        case 'jazz':
            $missatge = "El Jazz és elegància i improvisació. Molt bé!";
            break;
        case 'classica':
            $missatge = "La música clàssica és per a ànimes tranquiles.";
            break;
        default:
            $missatge = "No has escollit cap estil.";
    }

    echo "<h2>$missatge</h2>";
} else {
    echo "<p>No has seleccionat cap estil de música.</p>";
}
?>
