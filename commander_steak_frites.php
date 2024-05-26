<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander Steak frites</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1 id="page-title">Commander Steak frites</h1>

<div id="image-container">
    <img src="img/menu2.jpg" alt="Steak frites">
</div>

<form action="traitement_commande_steak_frites.php" method="post">
    <input type="hidden" name="plat" value="Steak frites">
    
    <label for="quantite">Quantité :</label>
    <input type="number" id="quantite" name="quantite" min="1" value="1" required>
    
    <h2>Adresse de livraison</h2>
    
    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse" required>
    
    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" required>
    
    <label for="code_postal">Code Postal :</label>
    <input type="text" id="code_postal" name="code_postal" required>
    
    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone" required>
    
    
</form>
<!-- Demande si l'utilisateur souhaite ajouter une boisson -->
<div>
    <p>Souhaitez-vous ajouter une boisson à votre commande ?</p>
    <form action="choisir_boisson.php" method="get" style="display:inline;">
        <button type="submit">Oui</button>
    </form>
    <form action="confirmation_commande.php" method="get" style="display:inline;">
        <button type="submit">Non</button>
    </form>
</div>


</body>
</html>
