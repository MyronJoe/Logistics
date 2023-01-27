<?php

include 'functions.php';

// dd($_SERVER)

$uri = $_SERVER['REQUEST_URI'];

// dd($uri);

if ($uri === '/') {
    require 'views/home.php';

}elseif($uri === '/about'){
    require 'views/about.php';

}elseif($uri === '/404'){
    echo 'Not found';
}



?>