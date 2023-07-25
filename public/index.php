<?php

const BASE_PATH = __DIR__. '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) { //will load a function whenever a class is called
    $results = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require basePath("{$results}.php");
});

require basePath('bootstrap.php');

$router = new \Core\Router();
$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);