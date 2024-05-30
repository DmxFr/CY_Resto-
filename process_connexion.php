<?php

include_once('config.inc.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM Utilisateurs WHERE nom_utilisateur = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['mot_de_passe'])) {
            $_SESSION['idUtilisateurs'] = $user['idUtilisateurs']; // Assurez-vous que le nom de la colonne est correct
            $_SESSION['username'] = $username;
            header("Location: historique_commandes.php");
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: connexion.html");
    exit();
}
?>
