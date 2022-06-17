<?php
include_once "../vendor/autoload.php";
require_once('../config/parametros.php');

use App\Controller\IndexController;
use App\Models\Palabra;
use App\Controller\PalabrasController;
// $palabra = Palabra::getInstancia();
// // $palabra->setId(2);
// $palabra->setPalabra("Moscu");
// echo $palabra->set();
// echo $palabra->getMensaje();
// echo $palabra->getAll();

// echo $_SERVER['REQUEST_URI'];
// $pp = str_replace(DIRTEST, '', $_SERVER['REQUEST_URI']);
// echo $pp;
// echo "<p>".DIRTEST."</p>";
// var_dump($palabra->getLastWords());
// echo $palabra->getMensaje();
$hola = new PalabrasController();
var_dump($hola);