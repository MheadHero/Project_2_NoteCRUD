<?php 

use Core\Response;

function dd($var){
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}

function uriNow($uri){
    return $_SERVER['REQUEST_URI'] === $uri;
}

function authorize($condition, $status = Response::UNAUTHORIZED){
    if (!$condition) {
        abort($status);
    }
}

function basePath($path){
    return BASE_PATH . $path;
}

function view($path, $vars = []){
    extract($vars); //useful for passing variables to views
    require basePath('views/'.$path);
}