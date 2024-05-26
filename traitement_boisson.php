<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');

// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis et si une boisson a été sélectionnée
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idBoissons'])) {
    $idBoissons = $_POST['idBoissons'];
    
    // Récupérer les détails de la boisson depuis la base de données
    $query = "SELECT nom, prix FROM boissons WHERE idBoissons = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $idBoissons);
    $stmt->execute();
    $stmt->bind_result($nomBoisson, $prixBoisson);
    $stmt->fetch();
    $stmt->close();

    // Stocker les détails de la boisson dans la session
    if (!isset($_SESSION['panier']['boissons'])) {
        $_SESSION['panier']['boissons'] = [];
    }
    $_SESSION['panier']['boissons'][] = [
        'id' => $idBoissons,
        'nom' => $nomBoisson,
        'prix' => $prixBoisson
    ];

    // Rediriger vers la page du panier
    header("Location: panier.php");
    exit();
} else {
    // Rediriger vers la page de choix des boissons si aucune boisson n'a été sélectionnée
    header("Location: choisir_boisson.php");
    exit();
}
?>
