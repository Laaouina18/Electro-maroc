<?php 


include "../functions.php";
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/"=>"../view/Home.view.php",
    "/home"=>"../view/Home.view.php",
    "/description"=>"../view/description.php",
    "/clients"=>"../view/clients.php",
    "/login"=>"../controller/loginController.php",
    "/logout" => "../controller/logoutController.php",
    "/produits"=>"../view/produits.php",
    "/contact"=>"../view/contact.php",
    "/Products"=>"../view/produits.php",
    "/inscription"=>"../view/inscription.php",
    "/ajouter"=>"../view/ajouter-produit.php",
    "/acheter"=>"../view/acheter.php",
    "/description"=>"../view/description.php",
    "/update"=>"../view/update.php",
    "/categorie"=>"../view/categorie.php",
    "/carte"=>"../view/carte.php",
    "/commandes"=>"../view/commandes.php",
    "/ajoutercat"=>"../view/ajoutercat.php",
    "/cate"=>"../view/cate.php",
    "/updatecategorie"=>"../view/Updatecategorie.php",
    "/commandesclient"=>"../view/commandesclient.php"
];


// var_dump($_SESSION);
// die();





if(array_key_exists($uri,$routes)){
    include $routes[$uri];
}else{
    include "../view/404.php";
}
