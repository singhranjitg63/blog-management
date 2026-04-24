<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
                                                                //views routs
    "/" => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/help' => "controllers/help.php",
    '/note' => "controllers/note.php",

                                                                //login and logout route
    '/login' => "controllers/login.php",
    '/logout' => "controllers/logout.php",

                                                                //dashborad route
    '/dash' => "controllers/dashboard.php",

                                                                //All users route
    '/user' => "controllers/usercontrollers/usercreate.php",
    '/users' => "controllers/usercontrollers/usersdash.php",
    '/delete' => "controllers/usercontrollers/userdelete.php",
    '/update' => "controllers/usercontrollers/userupdate.php",

                                                                // All blogs routs 
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