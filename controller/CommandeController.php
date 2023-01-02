<?php
require_once ("../Model/clientsModel.php");
class CommandeController {
    private $post;
    private $type;
   
    function addCommande(){
           $this->post=[
           'date_creation'=> $_POST['date_creation'],
           'date_envoi'=> $_POST['date_envoi'],
           'date_livraison'=> $_POST['date_livraison']
        ];
        $produit=new clientModel;
        $produit->addCommandeToDb($this->post);
        
    }
    function select($element,$id){
        $select=new clientModel;
        return $select->selectFromDb($element,$id);
    }
    function updateCommande(){
        
           
           
        $this->post=[
            'date_creation'=> $_POST['date_creation'],
           'date_envoi'=> $_POST['date_envoi'],
           'date_livraison'=> $_POST['date_livraison']
          
         ];
           
         $update=new CommandeModel;
         $update->updateCommandeInDb($this->post,$_GET['id']);
        
    }
    function deleteCommande() {
            $delete=new CommandeModel;
            $delete->deleteCommandeInDb($_GET['id']);
    }
    function getCommande() {
        $get = new CommandeModel;
        return $get->getCommandeFromDb();
    }
}
$test=new CommandeController();
$produit=$test->getCommande();
if (isset($_POST["enregistrer"])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pro=new CommandeController();
        $pro->addCommande();
    header('location:../view/index.php');
    }
};    
// suprimer
if(isset($_GET["c"])=="supprimer"){
   
if (isset($_GET["id"])) {
    
    $p=new CommandeController();
    $p->deleteCommande();
    header("location:/Products");
}
}
// modifier
if (isset($_GET["c"])=="modifier") {
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        if (isset($_GET["c"])=="update") {
            $produit = new CommandeController();
            $produit->updateCommande();
            header('location:../view/index.php');
        }
    }
}
