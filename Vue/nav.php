<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- lien icône -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- lien fichier css -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- lien fichier js -->
    <!-- <script src="assets/script.js"></script> -->
    <!-- lien fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Young+Serif&display=swap" rel="stylesheet">
    <!-- cdn bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
 	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>
    <!-- Navigation -->
    <nav id="top">
        <div class="navTop">
            <div class="logo">
                <figure>
                    <a class="logoLink" href="acceuil.php">
                        <img src="assets/img/Avatar-Maker (1).png" alt="avatar">
                    </a>
                </figure>
            </div>
            <div class="menu">
                <div class="elmtMenu">
                    <a class="accueil" href="acceuil.php">Accueil</a>
                </div>
                <div class="elmtMenu">
                    <a class="projets" href="#editProjet">Projets</a>
                </div>
                <div class="elmtMenu">
                    <a class="contact" href="#contact">Contact</a>
                </div>
                <div class="soc">
                <div>
                    <a href="https://github.com/Jerome4884" class="social"><i class="fa-brands fa-github fa-2xl" style="color: #000000;"></i></a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/jerome-moreau/" class="social"><i class="fa-brands fa-linkedin fa-2xl" style="color: #000000;"></i></a>
                </div>
                </div>
                <div class="btn">
                    <a href="" id="open-menu"><i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i></a>
                    <!-- <a href="" class="close-btn" style="font-family:Arial, Helvetica, sans-serif">X</a>  -->
                </div>
                <!-- <div class="toggle">
                    <button class="toggleBtn">Sombre ou Clair</button>
                </div> -->
            </div>
        </div>
        <!-- breadcrump, il faut que j'ajoute du js ou php pour qu'il soit dynamique  -->
        <div class="breadcrump" aria-label="breadCrump">
            <figure class="figFlag">
                <button class="fflag">
                    <img src="assets/img/French-flag-removebg-preview.png" alt="French-flag">
                </button>
            </figure>
            <figure class="figFlag">
                <button class="flag" >
                    <img src="assets/img/English-flag-removebg-preview.png" alt="English-flag">
                </button>
            </figure>
        </div>
        <!-- <div class="burger">
            <div class="mobile-container">
                <div class="burger-menu">
                    <div class="un">
                        <a class="accueil" href="acceuil.php">Accueil</a>
                    </div>
                    <div class="deux">
                        <a class="projets" href="#editProjet">Projets</a>
                    </div>
                    <div class="trois">
                        <a class="contact" href="#contact">Contact</a>
                    </div>
                </div>
                <div class="close">
                    <a href="" class="close-btn" style="font-family:Arial, Helvetica, sans-serif">X</a> 
                </div>
                <div class="open">
                    <a href="" id="open-menu"><i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i></a>
                </div>
            </div>
        </div> -->
    </nav>
    
</body>
</html>