<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête pour vérifier les informations de connexion
    $query = "SELECT * FROM Utilisateurs WHERE nom_utilisateur='$username' AND mot_de_passe='$password'";
    $result = mysqli_query($conn, $query);

    // Vérifier si l'utilisateur existe
    if (mysqli_num_rows($result) == 1) {
        // Connexion réussie
        header("Location: historique_commandes.php");
        exit();

    } else {
        // Rediriger vers une page dédiée aux inscrits
        header("Location: inscription_reussie.php");
        exit();
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
} else {
    // Si la requête n'est pas POST, rediriger vers le formulaire de connexion
    header("Location: connexion.html");
    exit();
}
?>

