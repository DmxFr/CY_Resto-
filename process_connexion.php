<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');

// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations d'identification
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Préparer une requête SQL pour récupérer l'utilisateur correspondant
    $query = "SELECT * FROM Utilisateurs WHERE nom_utilisateur = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier si l'utilisateur existe
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Vérifier si le mot de passe est correct
        if (password_verify($password, $user['mot_de_passe'])) {
            // Mot de passe correct, créer une session pour l'utilisateur
            $_SESSION['idUtilisateurs'] = $user['idUtilisateurs']; // Assurez-vous que le nom de la colonne est correct
            $_SESSION['username'] = $username;
            // Rediriger vers la page d'historique_commande ou une autre page réservée aux utilisateurs connectés
            header("Location: historique_commandes.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    // Fermer la connexion à la base de données
    $stmt->close();
    $conn->close();
} else {
    // Si la requête n'est pas POST, rediriger vers le formulaire de connexion
    header("Location: connexion.html");
    exit();
}
?>
