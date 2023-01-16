<?php
require_once 'connection.php';
class CommandeModel {
    private $posts;
    public function addCommandeToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO commandes (date_creation,date_envoi,date_livraison,idclient
        ) VALUES ('".$post['date_creation']."',
        '".$post['date_envoi']."','".$post['date_livraison']."',$_SESSION['client']['id']");
        // $stmt=$conn->query("INSERT INTO commande_produit (quantite,idproduit,idcomamande
        // ) VALUES (".$post['quantite']."",
        // '".$post['date_envoi']."','".$post['date_livraison']."',$_SESSION['client']['id']");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from commandes where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getCommandeFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from commande ;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getCommande($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from commandes where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function deleteCommandeInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from commandes where id= $id;");
    }
    public function updateCommandeInDb($post,$id){
        $conn=connect_to_db();
        
             $stmt=$conn->query("UPDATE commandes SET date_creation='".$post['date_creation']."',
             date_envoi='".$post['date_envoi']."',date_livraison=".$post['date_livraison']." where id=$id;");
       
    }
}