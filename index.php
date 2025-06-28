<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <script defer src="./app.js"></script>
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>
    <?php include "./header.php"; ?>

    <section class="hero">
        <div class="image"><img src="./assets/photos/photo hero MYM.jpg" alt="paysage"></div>
        <div class="slogan"><p>Environnement viable - Développement durable - Société équitable</p></div>
        <a href="./Qsn.php"><button> Découvrez l'association </button></a>
    </section>
    
    
    <div class="counter-container">
        <div class="counter-block">
            <div class="chiffre" data-target="30">0</div>
            <p class="counter-label">bénévoles</p>
        </div>
        <div class="counter-block">
            <div class="chiffre" data-target="17">0</div>
            <p class="counter-label">partenaires</p>
        </div>
        <div class="counter-block">
            <div class="chiffre" data-target="112">0</div>
            <p class="counter-label">actions</p>
        </div>
        <div class="counter-block">
            <div class="chiffre" data-target="75">0</div>
            <p class="counter-label">Villes</p>
        </div>
    </div>

    

    <div class="container swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-items swiper-slide">
                    <a href="" class="card-link">
                        <img src="./assets/photos/logo MYM.png" alt="a_remplacer" class="card-img">
                        <p class="card-badge">Thème de l'article</p>
                        <h2 class="card-titre">Titre de l'article</h2>
                        <button class="card-button material-symbols-outlined">arrow_forward</button>
                    </a>
                </li>
                <li class="card-items swiper-slide">
                    <a href="" class="card-link">
                        <img src="./assets/photos/logo MYM.png" alt="a_remplacer" class="card-img">
                        <p class="card-badge">Thème de l'article</p>
                        <h2 class="card-titre">Titre de l'article</h2>
                        <button class="card-button material-symbols-outlined">arrow_forward</button>
                    </a>
                </li>
                <li class="card-items swiper-slide">
                    <a href="" class="card-link">
                        <img src="./assets/photos/logo MYM.png" alt="a_remplacer" class="card-img">
                        <p class="card-badge">Thème de l'article </p>
                        <h2 class="card-titre">Titre de l'article</h2>
                        <button class="card-button material-symbols-outlined">arrow_forward</button>
                    </a>
                </li>
            </ul>

             <div class="swiper-pagination"></div>
             <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
        </div>
    </div> <br> <br>


    <div class="contact-container">
    <div class="map-container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.1992802985105!2d2.2055600999999885!3d48.892539199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6648eeccd1cbf%3A0xdab1a0f31cc040d!2s15%20Rue%20du%2019%20Mars%201962%2C%2092000%20Nanterre!5e0!3m2!1sfr!2sfr!4v1750145321819!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="photo">
            <img src="./assets/photos/maison des asso.png" alt="Maison des associations">
        </div>
    </div>
    <div class="informations">
        <h2>Contactez-nous :</h2>
        <p><i class='bx bx-envelope'></i> collectifmym@gmail.com</p>
        <p><i class='bx bx-map'></i> 15 Rue du 19 Mars 1962, 92000 Nanterre</p>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./carousel.js"></script>

    <?php include "./footer.php" ?>
</body>
</html>