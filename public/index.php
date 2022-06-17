<?php 

require_once('../vendor/autoload.php');
require_once('../config/parametros.php');

use App\Controller\IndexController;
use App\Controller\PalabrasController;
use App\Core\Router;

$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'IndexAction']
));
$router->add(array(
    'name' => 'add',
    'path' => '/^\/add$/',
    'action' => [PalabrasController::class, 'add']
));
$router->add(array(
    'name' => 'editWord',
    'path' => '/^\/edit\/([0-9]+)$/',
    'action' => [PalabrasController::class, 'editWord']
));
$router->add(array(
    'name' => 'deleteWord',
    'path' => '/^\/delete\/([0-9]+)$/',
    'action' => [PalabrasController::class, 'deleteWord']
));

$request = str_replace(DIRINDEX, '', $_SERVER['REQUEST_URI']);
$route = $router->matchs($request);

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo 'No route found';
}

?>