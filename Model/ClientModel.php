<?php
require_once 'connection.php';
class clientModel {
    private $posts;
    public function addClientToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO clients (name,email,pass,num,ville,
        adresse) VALUES ('".$post['name']."',
        '".$post['email']."','".$post['pass']."','".$post['num']."',
        '".$post['ville']."','".$post['adresse']."')");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from clients where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getClientFromDb(){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from clients ;");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function getClient($id){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from clients where id=$id;");
    
    $produit=$stmt->fetchAll();
    return $produit;
    }
    public function deleteClientInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from client where id= $id;");
    }
    public function updateClientInDb($post,$id){
        $conn=connect_to_db();
        
             $stmt=$conn->query("UPDATE client SET name='".$post['name']."',
             email='".$post['email']."',num=".$post['num'].",
             ville='".$post['ville']."',.adresse='".$post['adresse']."' where id=$id;");
       
    }
}