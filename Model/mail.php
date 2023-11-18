<?php
// if (isset($_POST['message'])) {
//     $retour = mail('jeje.moreau@hotmail.fr', 'Envoi depuis la page contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
//     if($retour)
//         echo '<p>Votre message a bien été envoyé.</p>';
// }

// Look tuto nouvelletecchno Utiliser un recepteur d'email comme mailhog...
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// require_once('../Controller/bd.php');
require_once('../phpMailer/Exception.php');
require_once('../phpMailer/PHPMailer.php');
require_once('../phpMailer/SMTP.php');
include_once('../Vue/nav.php'); 

$mail = new PHPMailer();

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

// $mail = $_POST['mail'];
// $objet = $_POST['objet'];
// $message = $_POST['message'];
// $headers = "From: jeje.moreau@hotmail.fr";

// mail($mail, $objet, $message, $headers);

