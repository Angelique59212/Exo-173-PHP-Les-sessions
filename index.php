<?php
session_start()?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les sessions</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: <?= $_SESSION['color']?>">

    <h1>Choix de couleur:</h1>

    <form action="script.php" method="post">
        <label for="choose-color">Choisis une couleur:</label>
        <select name="choose-color" id="choose-color">
            <option value="red">Rouge</option>
            <option value="blue">Blue</option>
            <option value="pink">Rose</option>
            <option value="cyan">Cyan</option>
            <option value="black">Black</option>
        </select>

        <input type="submit" value="Valider" name="submit">
    </form>

    <ul>
        <li><a href="page1.php">Page1</a></li>
        <li><a href="page2.php">Page2</a></li>
    </ul>


</body>
</html>