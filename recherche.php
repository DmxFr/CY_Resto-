<?php

require_once('config.inc.php');

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);

    $query = "SELECT * FROM Plats WHERE nomplat LIKE '%$search%'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Résultats de la recherche :</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nom du plat : " . htmlspecialchars($row["nomplat"]) . "<br>";
            echo "Description : " . htmlspecialchars($row["description"]) . "<br>";
            echo "Prix : " . htmlspecialchars($row["prix"]) . " €<br><br>";
        }
    } else {
        echo "<p>Aucun résultat trouvé.</p>";
    }
} else {
    echo "<p>Veuillez entrer un terme de recherche.</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de Plats</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Recherche de Plats</h1>
<!--formulaire de recherche-->
<form id="recherche-form" action="recherche.php" method="post">
    <label for="search">Rechercher un plat :</label>
    <input type="text" name="search" id="search" placeholder="Entrez le nom du plat" required>
    <button type="submit">Rechercher</button>
</form>
</body>
</html>
