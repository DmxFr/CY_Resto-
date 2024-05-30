<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

  
header("Location: commande.php");
exit();
} else {
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
  
</body>
</html>
