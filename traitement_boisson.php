<?php

include_once('config.inc.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idBoissons'])) {
    $idBoissons = $_POST['idBoissons'];
    
    $query = "SELECT nom, prix FROM boissons WHERE idBoissons = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $idBoissons);
    $stmt->execute();
    $stmt->bind_result($nomBoisson, $prixBoisson);
    $stmt->fetch();
    $stmt->close();

    if (!isset($_SESSION['panier']['boissons'])) {
        $_SESSION['panier']['boissons'] = [];
    }
    $_SESSION['panier']['boissons'][] = [
        'id' => $idBoissons,
        'nom' => $nomBoisson,
        'prix' => $prixBoisson
    ];

    header("Location: panier.php");
    exit();
} else {
    header("Location: choisir_boisson.php");
    exit();
}
?>
