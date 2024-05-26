<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');
// Démarrer la session
session_start();

// Vérifier si une commande est présente dans la session
if (!isset($_SESSION['panier'])) {
    header("Location: index.php");
    exit();
}

$commande = $_SESSION['panier'];

// Calculer le total
$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Votre Panier</h1>
<table>
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Prix</th>
    </tr>
    <?php if (isset($commande['plat'])): ?>
        <?php foreach ($commande['plat'] as $nomplat): ?>
            <tr>
                <td><?php echo htmlspecialchars($nomplat['nom']); ?></td>
                <td><?php echo htmlspecialchars($nomplat['quantité']); ?></td>
                <td><?php echo htmlspecialchars($nomplat['prix'] * $nomplat['quantité']); ?> €</td>
            </tr>
            <?php $total += $nomplat['prix'] * $nomplat['quantité']; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (isset($commande['boissons'])): ?>
        <?php foreach ($commande['boissons'] as $boisson): ?>
            <tr>
                <td><?php echo htmlspecialchars($boisson['nom']); ?></td>
                <td>1</td>
                <td><?php echo htmlspecialchars($boisson['prix']); ?> €</td>
            </tr>
            <?php $total += $boisson['prix']; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
<h2>Total : <?php echo $total; ?> €</h2>
<a href="confirmation_commande.php">Confirmer la commande</a>
<a href="annuler_commande.php">Annuler la commande</a>
</body>
</html>

