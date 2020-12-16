<?php
require_once('controllers/Routeur.php');
$routeur = new Routeur();
$routeur->routeReq();

echo ("<br>");
