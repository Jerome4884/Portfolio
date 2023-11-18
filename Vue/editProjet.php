<?php
require_once('../Controller/bd.php');
include_once('../Vue/nav.php'); 
error_reporting(E_ALL);
?>
<article class="articleProjet" id="projet">
    <h1>Projets</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore quasi eaque laborum distinctio vero blanditiis porro voluptate, dolorem, quisquam rerum ratione laboriosam expedita veritatis nam. Vero eum quis sunt sapiente!
        </p>
        <div class="addBtn">
            <button class="ajout"><a href="ajout.php">Ajouter</a></button>
        </div>
</article>
<article class="borderProjet">
    <table class="table">
        <thead>
            <tr class="enTete">
                <!-- <th>Numéro</th> -->
                <th>Date</th>
                <th>Nom</th>
                <th>Résumé</th>
                <th>Technologie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../Model/edit.php');
            // require_once('../Model/delete.php');

                foreach($projet as $projets){
                    ?>
                    <tr class="element">
                        <td hidden><?= $projets['id']?></td>
                        <td><?= $projets['Begin']?></td>
                        <td><?= $projets['name']?></td>
                        <td><?= $projets['resume']?></td>
                        <td><?= $projets['technologie']?></td>
                        <td>
                            <a href="view.php?id=<?= $projets['id'] ?>"><i class="fa-solid fa-eye fa-beat-fade"></i></a>
                            <a href="modifyProjet.php?id=<?= $projets['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
                            <a href="../Model/delete.php?id=<?= $projets['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</article>

<?php include_once('footer.php'); ?> 
