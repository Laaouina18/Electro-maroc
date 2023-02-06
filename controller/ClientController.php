<?php
require_once ("../Model/ClientModel.php");
class clientController {
    private $post;
    private $type;
   
    function addClient(){
           $this->post=[
           'name'=> $_POST['name'],
           'num'=> $_POST['num'],
           'adresse'=> $_POST['adresse'],
           'ville'=> $_POST['ville'],
           'email'=> $_POST['email'],
           'pass'=> $_POST['pass']
         
        ];
        $produit=new clientModel;
        $produit->addClientToDb($this->post);
        
    }
    function select($element,$id){
        $select=new clientModel;
        return $select->selectFromDb($element,$id);
    }
    function updateClient(){
        
           
           
        $this->post=[
            'name'=> $_POST['name'],
            'num'=> $_POST['num'],
            'adresse'=> $_POST['adresse'],
            'ville'=> $_POST['ville'],
            'email'=> $_POST['email'],
            'pass'=> $_POST['pass']
          
         ];
           
         $update=new clientModel;
         $update->updateClientInDb($this->post,$_GET['id']);
        
    }
    function deleteClient() {
            $delete=new clientModel;
            $delete->deleteClientInDb($_GET['id']);
    }
    function getClient() {
        $get = new clientModel;
        return $get->getClientFromDb();
    }
}
$test=new clientController;
$clients=$test->getClient();
if (isset($_POST["save"])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $clients=new ClientController();
        $clients->addClient();
    header('location:/home');
    }
};    
