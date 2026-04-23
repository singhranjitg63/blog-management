<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
    "/" => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/help' => "controllers/help.php",
    '/note' => "controllers/note.php",
    '/login' => "controllers/login.php",
    '/logout' => "controllers/logout.php",
    '/dash' => "controllers/dashboard.php",

    '/user' => "controllers/usercontrollers/usercreate.php",
    '/users' => "controllers/usercontrollers/usersdash.php",
    '/delete' => "controllers/usercontrollers/userdelete.php",

    '/blog' => "controllers/blogcontrollers/blogcreate.php",
    '/blogs' => "controllers/blogcontrollers/blogsdash.php",
    
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