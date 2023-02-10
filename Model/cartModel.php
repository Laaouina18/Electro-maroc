<?php

class CarteModel {
    private $posts;
    public function addCarteToDb($id){
        $conn=connect_to_db();
        $idc = $_SESSION['client']['id'];
        
        $stmt=$conn->query("INSERT INTO cart (idclient,idproduit,status,quant)
         VALUES ($idc,$id,'encours',1)");
        // $stmt=$conn->query("INSERT INTO commande_produit (quantite,idproduit,idcomamande
        // ) VALUES (".$post['quantite']."",
        // '".$post['date_envoi']."','".$post['date_livraison']."',$_SESSION['client']['id']");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from cart where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getCarteFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from cart inner join clients inner join produit on cart.idproduit=produit.id and cart.idclient=clients.id ;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getCarte($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from commandes where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function deleteCarteInDb(){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from cart ");
    }
    public function updateCarteInDb($q,$id){
        $conn=connect_to_db();
        
             $stmt=$conn->query("UPDATE cart SET quant=$q where idc=$id;");
       
    }
}