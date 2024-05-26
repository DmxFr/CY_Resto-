<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Connexion Admin</h1>

<form id="admin-login-form" action="admin_login.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Se connecter</button>
</form>

<?php
// Inclure le fichier de configuration
include_once('config.inc.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations d'identification
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Remplacez cette logique par une recherche dans votre base de données d'utilisateurs
    if ($username === "deozantoko" && $password === "Paris75020@") {
        // Authentification réussie, créer une session et rediriger vers la page d'administration
        session_start();
        $_SESSION["username"] = $username;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Informer l'utilisateur que les informations d'identification sont incorrectes
        echo "<p style='color:red;'>Échec de l'authentification. Veuillez réessayer.</p>";
    }
}
?>

</body>
</html>