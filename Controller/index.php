<?php
    // creation d'une variable routing vide, afin que sa ne plante pas par la suite
    $routing = '';
    // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
    if (isset($_GET['routing'])) {
        $routing = $_GET['routing'];
    }
    // Cela permet de charger les composant présent dans le dossier en fonction de la valeur de routing
    switch ($routing) {
        case 'projet':
            require_once('../Vue/projet.php');
            break;
        case 'contact':
            require_once('../Vue/contact.php');
            break;
        // On définit la page par défaut, ici accueil, quoi que l'utilisateur met dans l'url, il sera redirigé sur accueil
        default:
            require_once('../Vue/acceuil.php');
            break;
    }
?>
