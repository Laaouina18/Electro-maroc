<?php

class CatModel {
    private $posts;
    public function addCatToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO categorie (photocategorie,namecategorie,descriptioncat) VALUES ('".$post['photo']."','".$post['name']."',
        '".$post['description']."')");
    }
    function selectCatDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT * from categorie where idcategorie=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getCatFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from categorie ;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getCFromDb($id){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from categorie where idcategorie=$id;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
   
    public function deleteCatInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from categorie where idcategorie= $id;");
    }
    public function updateCattInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE categorie SET photocategorie='".$post['photo']."',namecategorie='".$post['name']."',
             
             descriptioncat='".$post['description']."' where idcategorie=$id;");
        }else{
            $stmt=$conn->query("UPDATE produit SET namecategorie='".$post['name']."',
            descriptioncat='".$post['description']."'where idcategorie=$id;");
        }  
    }
}
