<?php

include_once('config.inc.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plat = $_POST['plat'];
    $quantite = $_POST['quantité'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $telephone = $_POST['telephone'];

    $idUtilisateurs = isset($_SESSION['idUtilisateurs']) ? $_SESSION['idUtilisateurs'] : session_id();

    $query = "SELECT nom, prix FROM plats WHERE idPlats = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $plat);
    $stmt->execute();
    $stmt->bind_result($nomPlat, $prixPlat);
    $stmt->fetch();
    $stmt->close();

    $_SESSION['panier']['plats'][] = [
        'id' => $plat,
        'nom' => $nomPlat,
        'quantité' => $quantite,
        'prix' => $prixPlat,
        'adresse' => $adresse,
        'ville' => $ville,
        'code_postal' => $code_postal,
        'telephone' => $telephone
    ];

    header("Location: panier.php");
    exit();
} else {
    header("Location: commander_moules_frites.php");
    exit();
}
?>


