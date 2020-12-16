<?php
require_once('controllers/Routeur.php');
$routeur = new Routeur();
$routeur->routeReq();

echo ('sur accueil');
echo ("<br>");
