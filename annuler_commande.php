<?php
// Démarrer la session
session_start();

// Réinitialiser le panier
unset($_SESSION['panier']);

// Rediriger vers la page d'accueil
header("Location: index.php");
exit();
?>
