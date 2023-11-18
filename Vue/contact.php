<?php
// require_once("../Controller/bd.php");
include_once('nav.php');
error_reporting(E_ALL);

?>

<section class="formulaire">
    <form class="form" action="../Model/mail.php" method="POST">
        <label class="label" for="name">Votre nom</label>
        <input class="input" type="text" id="name" minlength="3" maxlength="20" name="name" required>

        <label class="label" for="mail">Votre e-mail</label>
        <input class="input" type="email" id="mail" name="mail" required>

        <label class="label" for="objet">Objet</label>
        <input class="input" type="text" id="objet" minlength="3" maxlength="30" name="objet" required>
        
        <label class="label" for="message">Votre message</label>
        <textarea class="input" type="text" id="message" rows="5" cols="30" name="message" required></textarea>

        <div class="submit">
            <input id="submit" type="submit" name="submit" value="envoyer">
        </div>
    </form>
</section>

<?php include_once('footer.php'); ?> 
