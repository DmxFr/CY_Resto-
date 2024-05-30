<?php

include_once('config.inc.php');

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: admin_login.php");
    exit();
}

$query = "SELECT * FROM Utilisateurs";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Administrateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="admin-dashboard">

<h1>Tableau de Bord Administrateur</h1>

<h2>Utilisateurs Inscrits</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom d'utilisateur</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["idUtilisateurs"] . "</td><td>" . $row["nom_utilisateur"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun utilisateur inscrit.";
}

mysqli_close($conn);
?>

</body>
</html>

