<?php
// Inclure le fichier de configuration de la base de données
include_once('config.inc.php');

// Démarrer la session
session_start();

// Déterminer l'ID utilisateur (connecté ou non)
$idUtilisateurs = isset($_SESSION['idUtilisateurs']) ? $_SESSION['idUtilisateurs'] : session_id();

// Récupérer l'historique des commandes de l'utilisateur
$query = "SELECT plat, quantité, adresse, ville, code_postal, telephone, dateCommande FROM commandes WHERE idUtilisateurs = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $idUtilisateurs);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des commandes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="historique-commandes">

<h1>Historique des commandes</h1>

<?php if ($result->num_rows > 0): ?>
    <table>
        <tr>
            <th>Plat</th>
            <th>Quantité</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
            <th>Téléphone</th>
            <th>Date de Commande</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['plat'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['quantité'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['adresse'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['ville'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['code_postal'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['telephone'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['dateCommande'] ?? ''); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>Vous n'avez pas encore passé de commande.</p>
<?php endif; ?>

<a href="index.php">Retour à l'accueil</a>

</body>
</html>

<?php
// Fermer la connexion à la base de données
$stmt->close();
$conn->close();
?>
