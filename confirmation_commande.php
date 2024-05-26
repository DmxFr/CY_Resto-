<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de commande</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Merci pour votre commande !</h1>
<p>Votre commande a été enregistrée et sera traitée sous peu.</p>
<a href="index.php">Retour à l'accueil</a>
<a href="historique_commandes.php">Voir l'historique de vos commandes</a>
</body>
</html>
<?php
// Démarrer la session
session_start();

// Réinitialiser le panier après la confirmation de la commande
unset($_SESSION['panier']);
?>