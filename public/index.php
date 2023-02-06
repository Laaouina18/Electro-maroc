<?php 


include "../functions.php";
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/"=>"../view/Home.view.php",
    "/home"=>"../view/Home.view.php",
    "/login"=>"../controller/loginController.php",
    "/logout" => "../controller/logoutController.php",
    "/addProduct" => "addProductController.php",
    "/produits"=>"../view/produits.php",
    "/contact"=>"../view/contact.php",
    "/Products"=>"../view/produits.php",
    "/inscription"=>"../view/inscription.php",
    "/ajouter"=>"../view/ajouter-produit.php",
    "/acheter"=>"../view/acheter.php",
    "/description"=>"../view/description.php",
    "/update"=>"../view/update.php",
    "/categorie"=>"../view/categorie.php",
    "/clients"=>"../view/clients.php",
    "/carte"=>"../view/carte.php"
];


// var_dump($_SESSION);
// die();





if(array_key_exists($uri,$routes)){
    include $routes[$uri];
}else{
    include "../view/404.php";
}
