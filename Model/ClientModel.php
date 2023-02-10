<?php
require_once 'connection.php';
include_once("../Model/usersModel.php");
class clientModel {
    private $posts;
    public function addClientToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO clients (name,email,pass,num,ville,
        adresse) VALUES ('".$post['name']."',
        '".$post['email']."','".$post['pass']."','".$post['num']."',
        '".$post['ville']."','".$post['adresse']."')");
        header("locatrion:/login");
        // $lastInsertId = $conn->lastInsertId();
      
        // $stmt=$conn->query("select from clients where id=$lastInsertId ");
        // $c=$stmt->fetch();
        // $client = new client;
        // $client->log($c["email"], $c["pass"]);
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from clients where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getClientFromDb($id){
        $conn=connect_to_db();
            $stmt=$conn->query("select * from clients where id=$id ;");
        
        $client=$stmt->fetchAll();
        return $client;
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