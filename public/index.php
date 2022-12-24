<?php 


include "../functions.php";


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/"=>"HomeController.php",
    "/home"=>"HomeController.php",
    "/login"=>"loginController.php"

];





if(array_key_exists($uri,$routes)){
    include "../controller/".$routes[$uri];
}else{
    include "../view/404.php";
}
