<?php
session_start();

include_once('config.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == 'confirmer') {
        $idUtilisateurs = isset($_SESSION['idUtilisateurs']) ? $_SESSION['idUtilisateurs'] : null;
        if ($idUtilisateurs === null) {
            $query = "INSERT INTO utilisateurs_temp (idTemp) VALUES (NULL)";
            $conn->query($query);
            $idUtilisateurs = $conn->insert_id;
            $_SESSION['idUtilisateurs'] = $idUtilisateurs;
        }
        foreach ($_SESSION['panier'] as $type => $items) {
            foreach ($items as $item) {
                $query = "INSERT INTO commandes (idUtilisateurs, plat, quantité, adresse, ville, code_postal, telephone, dateCommande) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("isissss", $idUtilisateurs, $item['nom'], 1, 'adresse', 'ville', 'code_postal', 'telephone');
                $stmt->execute();
                $stmt->close();
            }
        }
        $_SESSION['panier'] = []; 
        header("Location: confirmation_commande.php");
        exit();
    } elseif ($_POST['action'] == 'annuler') {
        $_SESSION['panier'] = []; 
        header("Location: index.php");
        exit();
    }
}
?>
