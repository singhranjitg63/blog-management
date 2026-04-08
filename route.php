<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
    "/" => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/dashboard' => "dashboard/index.dash.php",
    '/help' => "controllers/help.php",
];
function routeData($uri,$route){
if(array_key_exists($uri,$route)){
    require $route[$uri];
    } else {
        abort();
        }
}
function abort(){
    http_response_code(404);
    echo "Sory this page will by not found.";
    die();
}
routeData($uri,$route);