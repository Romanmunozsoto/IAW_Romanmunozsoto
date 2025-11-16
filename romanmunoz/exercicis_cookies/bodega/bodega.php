<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("majoredat", $_POST["majoredat"], time() + 86400);
    setcookie("idioma", $_POST["idioma"], time() + 86400);
    setcookie("moneda", $_POST["moneda"], time() + 86400);

    header("Location: info.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h2>Benvingut a la botiga de vins</h2>

    <form action="" method="POST">
        <label>Ets major d'edat?</label><br>
        <input type="radio" name="majoredat" value="si" required> Sí<br>
        <input type="radio" name="majoredat" value="no" required> No<br><br>

        <label>Selecciona l'idioma:</label><br>
        <select name="idioma" required>
            <option value="cat">Català</option>
            <option value="esp">Español</option>
            <option value="eng">English</option>
        </select><br><br>

        <label>Selecciona la moneda:</label><br>
        <select name="moneda" required>
            <option value="eur">€ Euros</option>
            <option value="gbp">£ Lliures</option>
            <option value="usd">$ Dòlars</option>
        </select><br><br>

        <button type="submit">Entrar a la botiga</button>
    </form>
</body>
</html>
