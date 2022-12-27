<?php 


include "../functions.php";
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/"=>"HomeController.php",
    "/home"=>"HomeController.php",
    "/login"=>"loginController.php",
    "/logout" => "logoutController.php",
    "/addProduct" => "addProductController.php",
    "/produits"=>"../view/produits.php",
    "/about"=>"../view/about.php",
    "/contact"=>"../view/contact.php",
    "/Products"=>"../view/produits.php",
    "/inscription"=>"../view/inscription.php",
    "/ajouter"=>"../view/ajouter-produit.php"

];


// var_dump($_SESSION);
// die();





if(array_key_exists($uri,$routes)){
    include "../controller/".$routes[$uri];
}else{
    include "../view/404.php";
}
