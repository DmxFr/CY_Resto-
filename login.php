<?php

include_once('config.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Utilisateurs WHERE nom_utilisateur='$username' AND mot_de_passe='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: historique_commandes.php");
        exit();

    } else {
        header("Location: inscription_reussie.php");
        exit();
    }

    mysqli_close($conn);
} else {
    header("Location: connexion.html");
    exit();
}
?>

