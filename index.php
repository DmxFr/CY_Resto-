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
</head>
<body>

<!-- Navbar -->
<header>
    <div id="header-menu" onclick="toggleMenu();">&#9776;</div>
    <div class="header-logo">Chez Léon</div>
    <nav class="header-navbar">
        <a href="inscription.html">Inscription</a>
        <a href="connexion.html">Connexion</a>
        <!-- Formulaire de recherche -->
        <form action="recherche.php" method="post" style="display: inline;">
            <input type="text" name="search" placeholder="Rechercher un plat" style="padding: 5px;">
            <button type="submit" style="padding: 5px;">Rechercher</button>
        </form>
        <!-- Mode sombre -->
        <div class="bx bx-moon" id="darkmode"></div>
    </nav>
</header>
<div id="sidebar">
    <a href="#accueil">Accueil</a>
    <a href="#apropos">A propos</a>
    <a href="#menu">Menu</a>
    <a href="#services">Services</a>
    <a href="formulaire_de_contact.html">Contact</a>
    <a href="admin_login.php">Connexion Admin</a>
</div>

<!-- Accueil -->
<section class="accueil" id="accueil">
    <div class="accueil-text">
        <h1>Chez Léon</h1>
        <h2>La gastronomie de <br> votre choix</h2>
        <a href="#" class="accueil-button">Voir Menu</a>
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, nobis nostrum incidunt minus modi impedit. Aut tenetur ut corrupti voluptatibus maxime et earum suscipit ducimus nesciunt delectus, minima natus nisi.</p>
        <a href="#" class="apropos-button">Voir plus</a>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum doloremque doloribus sit architecto maxime alias quae commodi voluptas explicabo! Quibusdam soluta optio harum? Et minima a nihil deleniti repudiandae quia!</p>
        </div>
        <!-- Service 2 -->
        <div class="services-plat">
            <img src="img/livraison.png" alt="livraison en cours">
            <h3>Livraison</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum doloremque doloribus sit architecto maxime alias quae commodi voluptas explicabo! Quibusdam soluta optio harum? Et minima a nihil deleniti repudiandae quia!</p>
        </div>
        <!-- Service 3 -->
        <div class="services-plat">
            <img src="img/livré.png" alt="commande livrée">
            <h3>Commande Livrée</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum doloremque doloribus sit architecto maxime alias quae commodi voluptas explicabo! Quibusdam soluta optio harum? Et minima a nihil deleniti repudiandae quia!</p>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="connect" id="connect">
    <div class="contect-text">
        <span>Venez nous parler</span>
        <h2>Connectez-vous</h2>
    </div>
    <a href="#" class="accueil-button">Contactez-nous</a>
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

<!-- Scroll-Reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

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
   // Fonction pour ouvrir le menu latéral
function toggleMenu() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
}

   // Ajout d'un écouteur d'événements pour fermer le menu latéral lors du clic en dehors du menu
	document.addEventListener('click', function(event) {
		var sidebar = document.getElementById('sidebar');
		if (!sidebar.contains(event.target) && event.target.id !== 'header-menu') {
			sidebar.classList.remove('active');
		}
	});

</script>

</body>
</html>
