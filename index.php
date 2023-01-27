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

    '/contact' => 'views/contact.php'
];


if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}else{
    http_response_code(404);

    require 'views/home.php';

    die();
}



?>