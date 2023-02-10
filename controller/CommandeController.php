<?php
require_once ("../Model/CommandeModel.php");
class CommandeController {
    private $post;
    private $type;
   
    function addCommande(){
    
        $produit=new commandeModel;
        $id=$produit->addCommandeToDb();
        return $id;
        
    }
    function addproduit($idc, $idp, $q){
        $produit = new commandeModel;
        $produit->addproduitcommande($idc,$idp, $q);
    }
    function select($element,$id){
        $select=new commandeModel;
        return $select->selectFromDb($element,$id);
    }
    function getprix($id){
        $select = new CommandeModel;
        return $select->getprix($id);
    }
    function updateCommande(){
           
         $update=new CommandeModel;
         $update->updateCommandeInDb($_GET['id']);
        
    }
    function updateCommandeclient(){
           
        $update=new CommandeModel;
        $update->updateCommandeclient($_GET['id']);
       
   }
    function deleteCommande() {
            $delete=new CommandeModel;
            $delete->deleteCommandeInDb($_GET['id']);
    }
    function getpro($idc,$idclient){
        $produit = new CommandeModel;
        $pro = $produit->getpr($idc, $idclient);
        return $pro;
       
    }
    function getCommande() {
        $get = new CommandeModel;
        return $get->getCommandeFromDb();
    }
}
$test=new CommandeController();
$commandes=$test->getCommande();


// if (isset($_POST["acheter"])) {
//     $id = $_GET["id"];
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $pro=new CommandeController();
//         $pro->addCommande();
//     header('location:../view/index.php');
//     }
// };    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<script type='text/javascript'>alert('vous ètes sur?');</script>";
    $commande = new CommandeController;
    $idc = $commande->addCommande();


    $q = $_POST["qtt"];
    for ($i = 0; $i < count($carte); $i++) {
        $produit = new CommandeController;
        $produit->addproduit($idc, $carte[$i]["idproduit"], $q[$i]);
    }
    $carte = new CarteController;
    $carte->deleteCarte();
    header("location:/home");
}

if(isset($_GET["t"])){
   

    
    $p=new CommandeController();
    $p->updateCommande();
   

}
if(isset($_GET["confirmerclient"])){
   

    
    $p=new CommandeController();
    $p->updateCommandeclient();
   

}

if (isset($_GET["v"])) {
    
      
            $produit = new CommandeController();
            $produit->deleteCommande();
           
   
}
