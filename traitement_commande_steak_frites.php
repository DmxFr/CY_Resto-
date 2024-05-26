<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');

// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $plat = $_POST['plat'];
    $quantite = $_POST['quantité'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $telephone = $_POST['telephone'];

    // Si l'utilisateur est connecté, utiliser son ID, sinon générer un ID temporaire
    $idUtilisateurs = isset($_SESSION['idUtilisateurs']) ? $_SESSION['idUtilisateurs'] : session_id();

    // Récupérer les détails du plat depuis la base de données
    $query = "SELECT nom, prix FROM plats WHERE idPlats = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $plat);
    $stmt->execute();
    $stmt->bind_result($nomPlat, $prixPlat);
    $stmt->fetch();
    $stmt->close();

    // Ajouter les détails de la commande au panier dans la session
    $_SESSION['panier']['plats'][] = [
        'id' => $plat,
        'nom' => $nomPlat,
        'quantité' => $quantite,
        'prix' => $prixPlat,
        'adresse' => $adresse,
        'ville' => $ville,
        'code_postal' => $code_postal,
        'telephone' => $telephone
    ];

    // Rediriger vers la page de panier
    header("Location: panier.php");
    exit();
} else {
    // Rediriger vers le formulaire de commande si la requête n'est pas POST
    header("Location: commander_steak_frites.php");
    exit();
}
?>
