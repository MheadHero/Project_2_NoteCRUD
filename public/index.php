<?php

const BASE_PATH = __DIR__. '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) { //will load a function whenever a class is called
    $results = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require basePath("{$results}.php");
});

require basePath('Core/router.php');