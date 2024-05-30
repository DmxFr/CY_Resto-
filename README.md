CHEZ LEON

README

# Chez Léon

Bienvenue chez Léon, votre destination en ligne pour une expérience gastronomique
exceptionnelle.
## Table des matières
- Description
- Installation
- Base de données
- Usage
1) Description
Chez Léon est une application web qui permet aux utilisateurs de commander des plats en
ligne, de choisir des boissons, et de recevoir leur commande à domicile. Notre mission est
de fournir une expérience culinaire agréable et sans tracas.

3) Installation
➢ Prérequis
- Installer Wampserver(https://www.wampserver.com/) pour héberger le site en local.
- Télécharger les fichiers du projet depuis le dépôt Github
- Accédez au répertoire du projet
- Copiez tous les fichiers dans le dossier www de WampServer : cp -r *
c:/wamp64/www/
- Ouvrer WampServer et démarrez tous les services (Apache, MySQL)

- Configurez la base de données :
• Ouvrez votre navigateur et allez à http://localhost/phpmyadmin.

• Connecter-vous avec les informations suivantes :
✓ Nom d’utilisateur : root
✓ Mot de passe : Woippy57@

A l’intérieur vous trouverez la base de données nommée ‘restaurant_db’

3) Base de données
La base de données ‘restaurant_db’ contient les tables suivantes :
• Boissons : Contient les informations sur les boissons disponibles.
• Commandes : Enregistre les commandes passées par les utilisateurs.
• Commandes_boissons : Associe les boissons aux commandes.
• Plats : Contient les informations sur les plats disponibles.
• Utilisateurs : Contient les informations sur les utilisateurs enregistrés.

4) Usage
- Ouvrez votre navigateur et allez à l’URL suivante pour accéder au site :
http://localhost/emplacementdossier/index.php
- Parcourez le menu et ajouter des articles à votre commande.
- Finaliser votre commande et attendez la livraison
