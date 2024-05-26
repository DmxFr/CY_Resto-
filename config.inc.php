<?php

// Configuration de la base de données
define('DB_HOST', 'localhost'); // Adresse du serveur de base de données
define('DB_USER', 'root'); // Nom d'utilisateur de la base de données
define('DB_PASS', 'Woippy57@'); // Mot de passe de la base de données
define('DB_NAME', 'restaurant_db'); // Nom de la base de données

// Autres configurations
define('SITE_NAME', 'chez_leon'); // Nom de votre site
define('ADMIN_EMAIL', 'zantokograce@gmail.com'); // Adresse email de l'administrateur
// Connexion à la base de données
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
} else {
    echo "Connexion à la base de données réussie."; // Débogage
}
?>