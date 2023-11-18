<?php
include_once('nav.php');
error_reporting(E_ALL);

    require_once("../Controller/bd.php");

    $sqlView = "SELECT * FROM `projet`";  //WHERE `id` = :id;";
    $queryView = $db->prepare($sqlView);
    $queryView->execute();
    // fetch pour récuperer un seul projet, fetchall si il y en a plusieurs
    $projet = $queryView->fetchall();

?>

<section>
    <article class="viewAll">
        <?php foreach($projet as $projets){?>
        <div class="projets">
            <div class="media">
                <img src="<?= $projets['img'] ?>" alt=""> 
            </div>
            <div class="content">
                <h1 id="h1View"><?= $projets['name'] ?></h1>
                <p class="pView"><?= $projets['resume'] ?>
                <br><br>Les technologies utilisées sont le <?= $projets['technologie'] ?></p>
            </div>
        </div>
        <?php } ?>
        <div class="btnTop">
            <a href="#top" id="btn-top"><i class="fa-solid fa-chevron-up fa-xl" style="color: #000000;"></i></a>
        </div>
        <div class="retour">
            <a href="acceuil.php" id="retour" class="retourViewAll"><i class="fa-solid fa-reply"></i> retour</a>
        </div>
    </article>

    <!-- <div class="btnView">
        <div class="retour">
            <a href="acceuil.php" id="retour"><i class="fa-solid fa-reply"></i> retour</a>
        </div>
        <div class="modifier">
            <a href="modifyProjet.php?id=<?= $projet['id'] ?>" id="modifier"><i class="fa-solid fa-pencil"></i> modifier</a>
        </div>
        <div class="supprimer">
        <a href="../Model/delete.php?id=<?= $projets['id'] ?>"><i class="fa-solid fa-trash"></i> Supprimer</a>
        </div>
    </div> -->

    <!-- <script src="assets/script.js" defer></script> -->

</section>