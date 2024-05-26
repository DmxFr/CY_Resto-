<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Récupération des données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Vous pouvez ajouter ici des validations supplémentaires et sauvegarder les données dans une base de données

// Redirection vers la page de commande
header("Location: commande.php");
exit();
} else {
// Si la requête n'est pas POST, rediriger vers le formulaire
header("Location: formulaire.html");
exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Commande</title>
</head>
<body>
<h2>Page de Commande</h2>
<p>Bienvenue, vous pouvez maintenant passer votre commande.</p>
<!-- Ajoutez ici le formulaire de commande ou la liste des menus -->
</body>
</html>
