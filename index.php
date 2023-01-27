<?php

include 'functions.php';

// dd($_SERVER)

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

// if ($uri === '/') {
//     require 'views/home.php';

// }elseif($uri === '/about'){
//     require 'views/about.php';

// }elseif($uri === '/404'){
//     echo 'Not found';
// }

$routes = [
    '/' => 'views/home.php',

    '/about' => 'views/about.php',

    '/tracking' => 'views/tracking.php',

    '/contact' => 'views/contact.php',

    '/air' => 'views/air.php',
];


function abort($code = 404){
    http_response_code($code);

    require 'views/error.php';

    die();
}


if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}else{
    abort();
}



?>