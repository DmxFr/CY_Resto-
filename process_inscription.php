<?php
include_once('config.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// Récupérer les données du formulaire
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hacher le mot de passe

    // Vérifier si les champs ne sont pas vides
    if (empty($username) || empty($email) || empty($password)) {
        echo "Tous les champs sont obligatoires.";
        exit();
    }

    $query = "INSERT INTO Utilisateurs (nom_utilisateur, email, mot_de_passe) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Votre inscription a été bien enregistrée.";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Méthode de requête non autorisée.";
}
?>


