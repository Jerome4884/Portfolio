<?php
// fichiers necessaires, attention au chemin
require_once('../Controller/bd.php');
include_once('../Vue/nav.php'); 
error_reporting(E_ALL);

$sqlEdit = "SELECT * FROM `projet`";
$queryEdit = $db->prepare($sqlEdit);
$queryEdit->execute();

$projet = $queryEdit->fetchAll();
