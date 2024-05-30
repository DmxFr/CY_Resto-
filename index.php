
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Léon</title>
    <!-- Icone -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- Lien CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Scroll-Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>

<!-- Navbar -->
<header>
    <div id="header-menu"></div>
    <div class="header-logo">Chez Léon</div>
    <nav class="header-navbar">
        <a href="#accueil">Accueil</a>
        <a href="formulaire_de_contact.html">Contact</a>
        <a href="inscription.html">Inscription</a>
        <a href="connexion.html">Connexion</a>
        <a href="admin_login.php">Connexion Admin</a>
        <!-- Formulaire de recherche -->
        <form action="recherche.php" method="post" style="display: inline;">
            <input type="text" name="search" placeholder="Rechercher un plat" style="padding: 5px;">
            <button type="submit" style="padding: 5px;">Rechercher</button>
        </form>
        <!-- Mode sombre -->
        <div class="bx bx-moon" id="darkmode"></div>
    </nav>
</header>

<!-- Accueil -->
<section class="accueil" id="accueil">
    <div class="accueil-text">
        <h1>Chez Léon</h1>
        <h2>La gastronomie de <br> votre choix</h2>
        <a href="#menu" class="accueil-button">Voir Menu</a>
    </div>
    <div class="accueil-img">
        <img src="img/restaurant.jpg" alt="restaurant">
    </div>
</section>

<section class="apropos" id="apropos">
    <div class="apropos-img">
        <img src="img/restau-interieur2.jpg" alt="restaurant-interieur">
    </div>
    <div class="apropos-text">
    <span>A propos de nous</span>
    <h2>Nous aimons vous faire plaisir<br>A table !</h2>
    <p>Bienvenue chez Chez Léon, où notre passion est de vous offrir une expérience gastronomique exceptionnelle. Depuis notre ouverture, nous nous engageons à vous servir des plats délicieux préparés avec des ingrédients de la plus haute qualité.</p>
    <a href="Apropos.html" class="apropos-button">Voir plus</a>
</div>

</section>

<section class="menu" id="menu">
    <div class="menu-top">
        <span>Menu</span>
        <h2>Carte de la semaine</h2>
    </div>
    <div class="menu-contenu">
        <div class="menu-plat">
            <div class="menu-plat-img">
                <img src="img/menu1.jpg" alt="Pâtes Bolognaise">
            </div>
            <h2>Pâtes Bolognaise</h2>
            <span>€11</span>
            <a href="commander_pates_bolognaise.php">
                <i class="bx bx-cart-alt"></i>
            </a>
        </div>
    </div>
</section>
<!--Menu 2-->
<div class="menu-contenu">
    <div class="menu-plat">
        <div class="menu-plat-img">
            <img src="img/menu2.jpg" alt="Steak-Frites">
        </div>
        <h2>Steak-Frites</h2>
        <span>€15</span>
        <a href="commander_steak_frites.php">
            <i class="bx bx-cart-alt"></i>
        </a>
    </div>
</div>

<!--Menu 3-->
<div class="menu-contenu">
    <div class="menu-plat">
        <div class="menu-plat-img">
            <img src="img/menu3.jpg" alt="Moules-Frites">
        </div>
        <h2>Moules-Frites</h2>
        <span>€14</span>
        <a href="commander_moules_frites.php">
            <i class="bx bx-cart-alt"></i>
        </a>
    </div>
</div>

<!-- Services -->
<section class="services" id="services">
    <div class="menu-top">
        <span>Services</span>
        <h2>Nous avons aussi des services de qualité !</h2>
    </div>
    <div class="services-contenu">
        <!-- Service 1 -->
        <div class="services-plat">
            <img src="img/commande.png" alt="votre commande">
            <h3>Votre Commande</h3>
            <p>Chez Léon, nous facilitons votre expérience de commande en ligne. Parcourez notre menu varié, choisissez vos plats préférés et personnalisez votre commande selon vos goûts. Notre interface simple et intuitive vous permet de passer votre commande en quelques clics seulement.</p>
        </div>
        <!-- Service 2 -->
        <div class="services-plat">
            <img src="img/livraison.png" alt="livraison en cours">
            <h3>Livraison</h3>
            <p>Nous savons que votre temps est précieux. C'est pourquoi nous nous engageons à livrer vos repas rapidement et en toute sécurité. Nos livreurs professionnels veillent à ce que votre commande arrive chaude et fraîche à votre porte. Profitez de la gastronomie de Chez Léon sans quitter le confort de votre domicile.</p>
        </div>
        <!-- Service 3 -->
        <div class="services-plat">
            <img src="img/livré.png" alt="commande livrée">
            <h3>Commande Livrée</h3>
            <p>Votre commande est arrivée ! Nous espérons que vous apprécierez chaque bouchée de nos plats préparés avec soin. Si vous avez des questions ou des commentaires, notre équipe est toujours à votre écoute pour garantir votre satisfaction. Bon appétit et merci de faire confiance à Chez Léon.</p>
        </div>
    </div>
</section>

<!-- Contact -->
<<section class="connect" id="connect">
    <div class="connect-text">
        <span>Venez nous parler</span>
        <h2>Connectez-vous</h2>
    </div>
    <a href="formulaire_de_contact.html" class="accueil-button">Contactez-nous</a>
</section>

<section class="contact" id="contact">
    <div class="contact-text">
        <h3>Chez Léon</h3>
        <span>Suivez nous</span>
        <div class="reseau-social">
            <a href="#" class='bx bxl-facebook'></a>
            <a href="#" class='bx bxl-instagram'></a>
            <a href="#" class='bx bxl-twitter'></a>
            <a href="#" class='bx bxl-tiktok'></a>
        </div>
    </div>
    <div class="contact-menu">
        <h3>Liens rapides</h3>
        <ul>
            <li><a href="#Confidentialité">Confidentialité</a></li>
            <li><a href="#Responsabilité">Responsabilité</a></li>
            <li><a href="#Utilisation">Utilisation</a></li>
        </ul>
    </div>
    <div class="contact-menu">
        <h3>Liens rapides</h3>
        <ul>
            <li><a href="#Confidentialité">Confidentialité</a></li>
            <li><a href="#Responsabilité">Responsabilité</a></li>
            <li><a href="#Utilisation">Utilisation</a></li>
        </ul>
    </div>
    <div class="contact-map">
        <h3>Localisation</h3>
        <i class="bx bxs-map"><span>8 Av. Jean Bart, 95000 Cergy</span></i>
        <i class="bx bxs-phone"><span>0134353170</span></i>
        <i class="bx bxs-envelope"><span>chezleon@gmail.com</span></i>
    </div>
</section>

<script>
    //DarkMode

let darkmode = document.querySelector('#darkmode');

darkmode.onclick = () =>{
    if(darkmode.classList.contains('bx-moon')){
        darkmode.classList.replace('bx-moon', 'bx-sun');
        document.body.classList.add('active');
    }else{
        darkmode.classList.replace('bx-sun', 'bx-moon');
        document.body.classList.remove('active');
    }
}
</script>

</body>
</html>
