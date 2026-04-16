<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
    "/" => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/dashboard' => "dashboard/dashboard.php",
    '/help' => "controllers/help.php",
    '/note' => "controllers/note.php",
    '/blog' =>"dashboard/blog.dash.php",
    '/user' =>"controllers/usercreate.php",
    '/users' =>"controllers/usersdash.php",
    '/blog' =>"controllers/blog.php",
    
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