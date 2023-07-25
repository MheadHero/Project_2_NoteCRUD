<?php

use Core\App;
use Core\Container;
use Core\Database;


//bootstrap is a file that is loaded before the app is loaded
$container = new Container(); 

$container->bind('Core\Database', function () {
    $config = require basePath('config.php');

    return new Database($config['database']);
});

App::setContainer($container);