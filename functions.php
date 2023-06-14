<?php 

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