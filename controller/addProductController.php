<?php

include "../Model/database.php";
$db = new Database();
$id=$_GET['id'];
if (isset($_POST['submit'])) {
    // $name = $_POST['name'];
    // $prix = $_POST['prix'];
    // $description = $_POST['description'];
    
    // $query = $db->conn->prepare("select * from produit where name = :name") ;
    // $query = $db->conn->prepare("insert into produit (name,prix,description) VALUES (:name,:prix,:description)") ;
   

    // $query->execute([
    //     // "id"=>2,
    //     "name"=>$name,
    //     "prix"=>$prix,
    //     "description"=>$description

    // ]);


    $produit = $query->fetchAll(PDO::FETCH_ASSOC);

    // printDump($produit[0]["name"]);
    
    foreach($produit as $pro){
        echo $pro['name'];
    }

    // echo $name . "/" . $prix . "/".$description;
}



$query = $db->conn->prepare("delete from produit where id=:id") ;
$query->execute([
    'id'=> $id
]);

?>


<?php include "../view/addProduct.view.php" ?>