<?php

class productModel {
    private $posts;
    public function addProductToDb($post,$name){
        $conn=connect_to_db();
if ($_POST["categorie"]!="Catégorie") {
    $p=new productModel();
    $idc=$p->getcat($name)['idcategorie'];
}else{$idc=NULL;}
        $stmt=$conn->query("INSERT INTO produit (photo,namep,prixachat,prixfinal,codebare,categorie,reference,
        description,quantite,idcategorie) VALUES ('".$post['photo']."','".$post['name']."',
        '".$post['prixachat']."','".$post['prixfinal']."','".$post['codebare']."','".$post['categorie']."',
        '".$post['reference']."','".$post['description']."','".$post['quantite']."',$idc)");
    }
    public function getcat($name){
      $conn=connect_to_db();
      $stmt=$conn->query("select idcategorie from categorie where namecategorie='$name'");
      $idc=$stmt->fetch();
      return $idc;
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from produit where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getProductsFromDb($idc,$idu){
        $conn=connect_to_db();
            $stmt=$conn->query("SELECT *FROM produit");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getProFromDb($id){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from produit where id=$id;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getPro($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from produit where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function deleteProductInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from produit where id= $id;");
    }
    public function updateProduitInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE produit SET photo='".$post['photo']."',namep='".$post['name']."',
             categorie='".$post['categorie']."',prixachat='".$post['prixachat']."',
             prixfinal='".$post['prixfinal']."',reference='".$post['reference']."',
             description='".$post['description']."',quantite=".$post['quantite']." , 
             codebare='".$post['codebare']."' where id=$id;");
        }else{
            $stmt=$conn->query("UPDATE produit SET namep='".$post['name']."',
            categorie='".$post['categorie']."',prixachat='".$post['prixachat']."',
            prixfinal='".$post['prixfinal']."',reference='".$post['reference']."',
            description='".$post['description']."',quantite=".$post['quantite']." , 
            codebare='".$post['codebare']."' where id=$id;");
        }  
    }
}
