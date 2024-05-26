<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "Woippy57@";
$dbname = "restaurant_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Récupérez les boissons disponibles
$sql = "SELECT idBoissons, nom, prix, image FROM boissons";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir une boisson</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Choisir une boisson</h1>

<form action="traitement_boisson.php" method="post">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="boisson">';
            echo '<img src="' . $row["image"] . '" alt="' . $row["nom"] . '">';
            echo '<p>' . $row["nom"] . ' - €' . $row["prix"] . '</p>';
            echo '<input type="radio" name="idBoissons" value="' . $row["idBoissons"] . '" required>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucune boisson disponible.</p>';
    }
    $conn->close();
    ?>
    <button type="submit">Ajouter la boisson à la commande</button>
</form>

</body>
</html>
