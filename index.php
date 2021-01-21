<?php
$data = $_SERVER['REQUEST_URI'];
$urlCss = substr($data, strrpos($data, '/' )+1)."\n";

define('ACTUALPAGE',$urlCss);
define('URL',
str_replace("index.php", "Accueil" , isset($_SERVER['HTTPS']) ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once('core/Routeur.php');
$routeur = new Routeur();
$routeur->routeReq();
