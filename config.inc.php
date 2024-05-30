<?php

// Configuration de la base de données
define('DB_HOST', 'localhost'); 
define('DB_USER', 'root'); 
define('DB_PASS', 'Woippy57@'); 
define('DB_NAME', 'restaurant_db'); 

// Autres configurations
define('SITE_NAME', 'chez_leon'); 
define('ADMIN_EMAIL', 'zantokograce@gmail.com'); 
// Connexion à la base de données
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
} else {
    echo "Connexion à la base de données réussie."; 
}
?>
