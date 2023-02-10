<?php
require_once ("../Model/cartModel.php");
class CarteController {
    private $post;
    private $type;
   
    function addCarte($id){
         
        $produit=new CarteModel;
        $produit->addCarteToDb($id);
        
    }
    function select($element,$id){
        $select=new CarteModel();
        return $select->selectFromDb($element,$id);
    }
    function updateCarte($id,$q){
        
    
           
         $update=new CarteModel;
         $update->updateCarteInDb($q,$id);
        
    }
    function deleteCarte() {
            $delete=new CarteModel;
            $delete->deleteCarteInDb();
    }
    function getCarte() {
        $get = new CarteModel;
        return $get->getCarteFromDb();
    }
}
$test=new CarteController();
$carte=$test->getCarte();
if (isset($_GET["acheter"])=="aa") {
    
    $id = $_GET["id"];
  

        $pro=new CarteController();
        $pro->addCarte($id);
    header('location:/Products');
    
};    
// suprimer
if(isset($_GET["a"])=="annuler"){
  
if (isset($_GET["id"])) {
        
    $p=new CarteController();
    $p->deleteCarte();
    header("location:/carte");
}
}
if (isset($_GET["c"])) {
    echo ("hh");
    if (isset($_GET["id"])) {
        
        $id=$_GET["id"];
        $q = $_POST["quantite"];
        
            $produit = new CarteController();
            $produit->updateCarte($id,$q);
         
        
    }
}
