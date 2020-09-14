<?php

// Définition des chemins de l'application
define ("CONTROLLER_PATH", "../controllers/");
define ("VIEW_PATH", "../views/");

// Récupération du nom du contrôller
$controller = filter_input(INPUT_GET, "c", FILTER_SANITIZE_URL);

if (! file_existes (CONTROLLER_PATH. $CONTROLLER . ".php")){
    $controller = "Not found";
}

// Inclusion du contrôleur
include CONTROLLER_PATH . $controller . ".php";