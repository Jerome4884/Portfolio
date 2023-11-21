<?php 
    require_once('../Controller/index.php'); 
    include_once('nav.php'); 
?>

    <main>
        <article>
            <!-- <section id="landingPage"> -->
                <article>
                    <div class="slider">
                        <img class="slider-bkg" src="assets/img/bureau-dans-foret.jpeg" alt="bureau dans foret">
                        <div class="slider-content">
                            <h1>Jérôme Moreau</h1>
                            <p id="PHun">Je suis un développeur full-stack junior</p>
                        </div>
                    </div>
                </article>

                <header>
                    <h1 id="Tun">Pour en savoir un peu plus</h1>
                </header>
                <section id="section1">
                    <p id="presentation">
                        </br>Je suis un développeur web qui a initié sa reconversion en 2021 et qui la poursuit depuis le mois d'octobre 2022.</br> L'IT était une curiosité, c'est maintenant une passion, surtout sur la partie développement back-end et programmation. Cette curiosité me pousse à toujours apprendre, ma soif de savoir est plus que comblée dans ce domaine qui ne cesse d'évoluer. J'ai un attrait pour la <strong>cybersécurité</strong>, la blockchain et l'IA dans son ensemble. Mon stage de 10 semaines effectué chez Aegis-Civis groupe en 2023 m'a permis de découvrir plus en profondeur les différents aspects de la cybersécurité. Ma formation de développeur web et web mobile s'est terminée fin Août 2023 et j'ai obtenu mon titre ce qui atteste des compétences acquises. Au cours de ma formation, j'ai développé des compétences en développement front-end et back-end, en communication avec des API, en implémentation de bases de données relationnelles et en utilisation de frameworks comme symfony.</br>

                        Le mode intermédiaire est en cours de chargement.</br>

                        Merci d'avoir pris le temps de lire ces quelques lignes me concernant.

                        </br>
                        </br>
                    </p>
                </section>

                <article class="section-stack">
                    <div class="boxed">
                        <p id="pStack"><strong>Mon stack technique</strong></p>
                        <div class="stack">
                            <div class="skill">
                                <img class="skill-img" src="assets/img/hhtml-removebg-preview.png" alt="">
                                <h3>HTML</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img"  src="assets/img/csss.png" alt="logo ">
                                <h3>CSS</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/javascript-logo-big.png" alt="logo">
                                <h3>Javascript</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/Bootstrap_logo.svg.png" alt="logo">
                                <h3>Bootstrap</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/PHP-logo.svg.png" alt="logo">
                                <h3>PHP</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/sql-database-icon-logo-design-ui-or-ux-app-vector-17507730-removebg-preview.png" alt="logo">
                                <h3>SQL</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/symfony-logo-png-transparent.png" alt="logo">
                                <h3>Symfony</h3>
                            </div>
                            <div class="skill">
                                <img class="skill-img" src="assets/img/WordPress_blue_logo.svg.png" alt="logo">
                                <h3>Wordpress</h3>
                            </div>
                        </div>
                    </div>
                </article>
            <!-- </section> -->
            
        </article>
        <!-- partie du carrousel -->
        <section class="section2" id="editProjet">
            <div class="carrousel">
                <h1 id="tGalerie">Galerie</h1>
                <p id="pGalerie">Voici des réalisations effectuées</p>
                <div class="images">
                    <div class="img ">
                        <img src="assets/img/Screen accueil cyberH 2023-10-11 170301.png" alt="img1">
                        <div class="info">
                        </div>
                    </div>
                    <div class="img">
                        <img src="assets/img/blog html css.png" alt="img2">
                        <div class="info">
                        </div>
                    </div>
                    <div class="img">
                        <img src="assets/img/Screen page gestion projet admin 2023-11-11 102255.png" alt="img3">
                        <div class="info">
                        </div>
                    </div>
                    <div class="img">
                        <img src="assets/img/Screen calcul.png" alt="img4">
                        <div class="info">
                        </div>
                    </div>
                </div>
                <i id="previous" class="las la-chevron-circle-left"></i>
                <i id="next" class="las la-chevron-circle-right"></i>
            </div>
            <div class="detailProjet">
                <a id="aProjet" href="viewAll.php">Pour voir les réalisations</a>
            </div>
        </section>
        <!-- fin du carrousel -->

        <section id="contact">
            <div class="bkgContact">
                <img class="slider-bkg" src="assets/img/bureau-dans-foret.jpeg" alt="bureau dans foret">
            </div>
            <div class="contentContact">
                <div class="mail">
                    <!-- <i class="fa-solid fa-at fa-2xl"></i> -->
                    <h1 id="tMail"><u>Mon e-mail: </u></h1>
                    <p id="pContact">Vous pouvez me contacter en cliquant dessus<br><br></p>
                    <a href="mailto:j.moreau4884@hotmail.com" >j.moreau4884@hotmail.com</a>
                </div>
                <div class="tel">
                    <!-- <i class="fa-solid fa-phone-volume fa-2xl"></i> -->
                    <h1 id="tTel"><u>Mon téléphone: </u></h1>
                    <p id="p2Contact">Vous pouvez me contacter en cliquant dessus<br><br></p>
                    <a href="tel:0672869722" >06.72.86.97.22</a>
                </div>
            </div>
        </section>
        <div class="btnTop">
            <a href="#top" id="btn-top"><i class="fa-solid fa-chevron-up fa-xl" style="color: #000000;"></i></a>
        </div>
    </main>
    <!-- lien script -->
    <script src="assets/script.js" defer></script>
    <!-- <script src="assets/dark-script.js"></script> -->

    <?php include_once('footer.php'); ?> 


