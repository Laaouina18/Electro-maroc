<?php
require_once 'connection.php';
class CommandeModel {
    private $posts;
    public function addCommandeToDb(){
        $conn=connect_to_db();
        $idclient = $_SESSION['client']['id'];
        $stmt=$conn->query("INSERT INTO commandes (idclient,datecreation) VALUES ($idclient,NOW());");
        $lastInsertId = $conn->lastInsertId();
        return $lastInsertId;
        // ) VALUES (".$post['quantite']."",
        // '".$post['date_envoi']."','".$post['date_livraison']."',$_SESSION['client']['id']");
    }
    public function addproduitcommande($idc,$idp,$q){
        $conn = connect_to_db();

        $stmt=$conn->query("insert into commande_produit(idcommande,idproduit,quantite) values($idc,$idp,$q)");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from commandes where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getCommandeFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("SELECT*from commandes");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getCommande($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from commandes where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function getpr($idc,$idclient){
        $conn = connect_to_db();
        $stmt = $conn->query("select  produit.namep,clients.name,commande_produit.quantite  from produit inner join commande_produit 
    inner join commandes inner join clients on commande_produit.idproduit=produit.id  
WHERE commande_produit.idcommande=$idc and commandes.idclient=$idclient GROUP BY produit.namep;");
    $produit=$stmt->fetchAll();
    return $produit;
    }
    function getprix($id,$idc){
        $conn = connect_to_db();
        $stmt = $conn->query("SELECT SUM(commande_produit.quantite*produit.prixfinal) as total 
        from commande_produit INNER JOIN produit on commande_produit.idproduit=produit.id 
        inner join commandes on commande_produit.idcommande=commandes.idcommande  where
         commandes.idclient=$id AND commandes.idcommande=$idc");
        $result = $stmt->fetch();
        $total = $result['total'];
        return $total;
    }
    function getq($id){
        $conn = connect_to_db();
        $stmt = $conn->query("SELECT commande_produit.quantite as total 
        from commande_produit INNER JOIN produit inner join commandes on commande_produit.idproduit=produit.id group by
         commandes.idcommande=$id;");
        $result = $stmt->fetch();
        $total = $result['total'];
        return $total;
    }
    public function deleteCommandeInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from commande_produit where idcommande=$id");
        $stmt=$conn->query("delete from commandes where idcommande=$id;");
        header("location:/commandes");
    }
    public function updateCommandeInDb($id){
        $conn=connect_to_db();
        
             $stmt=$conn->query("UPDATE commandes SET 
             dateenvoie=Now(),status='envoyé' where idcommande=$id;");
        header("location:/commandes");
       
    }
    public function updateCommandeclient($id){
        $conn=connect_to_db();
        
             $stmt=$conn->query("UPDATE commandes SET 
             datelivraison=Now(),status='livré' where idcommande=$id;");
        header("location:/commandesclient");
       
    }
}