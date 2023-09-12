<?php
$uri =parse_url( $_SERVER['REQUEST_URI'])['path'];

$routes = [ 
    '/'=>'controller/index.php',
    '/about'=>'controller/about.php',
    '/contact'=>'controller/contact.php',
    

];
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
    }
function abort(){

    http_response_code(404);

    echo"Sorry. Not Found.";
    die();

}
routeToController($uri, $routes);