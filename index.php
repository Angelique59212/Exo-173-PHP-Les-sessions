<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les sessions</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Choix de couleur:</h1>

    <form action="script.php" method="post">
        <label for="choose-color">Choisis une couleur:</label>
        <select name="color" id="choose-color">
            <option value="color-red">Rouge</option>
            <option value="color-blue">Blue</option>
            <option value="color-pink">Rose</option>
            <option value="color-cyan">Cyan</option>
            <option value="color-black">Black</option>
        </select>

        <input type="submit" value="Valider" id="submit">
    </form>

</body>
</html>