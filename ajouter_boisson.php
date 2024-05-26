<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "username", "password", "database");

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['boisson'])) {
    $boisson = $_POST['boisson'];

    // Préparer et exécuter la requête SQL
    $stmt = $conn->prepare("INSERT INTO commandes_boissons (boisson) VALUES (?)");
    $stmt->bind_param("s", $boisson);

    try {
        $stmt->execute();
        echo "Boisson ajoutée avec succès!";
    } catch (mysqli_sql_exception $e) {
        echo "Erreur: " . $e->getMessage();
    }

    $stmt->close();
} else {
    echo "Aucune boisson sélectionnée.";
}

$conn->close();

// Rediriger vers la page de confirmation
header("Location: confirmation_commande.php");
exit();
?>
