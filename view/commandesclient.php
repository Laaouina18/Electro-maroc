
<?php

include_once("header.php");
include_once("navbar.php");
include_once("../controller/CommandeController.php");
include_once("../controller/ClientController.php");

?>

<!-- <select class="form-select" aria-label="Default select example" style="width:90%;margin:auto;margin-top:5%;">
  <option selected>Sélectionner les commandes par prix</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>


<div class="table-responsive m-3">
  <table class="table">
      <thead  class="thead-dark">
        <tr>
          <!-- <th scope="titre-table">#</th> -->
          <th scope="col">Commandes</th>
          <th scope="col">Prix Totale</th>
       
          <th scope="col">Date de création</th>
          <th scope="col">Date d'envoie</th>
          <th scope="col">Date de livraison</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      
       <?php foreach ($commandes as $row){
        if($row["idclient"]==$_SESSION['client']['id']){
     ?>
        <tr classe="active">
         
     <?php $test=new clientController();
        $clients=$test->getClient($row["idclient"]);
        $produit = new CommandeController();
        $test = $produit->getpro($row['idcommande'], $row['idclient']);
        $prix = new CommandeController();
        $prixtotal = $prix->getprix($row["idclient"]);?>
         
          <td><?php
            foreach($test as $test ){
            echo $test["namep"];
            echo '<br>';
            }

        ?></td>
 <td><?php   echo $prixtotal;?>DH</td>

          
       

          <td><?=$row["datecreation"]?></td>
          <td><?=$row["dateenvoie"]?></td>
          <td><?=$row["datelivraison"]?></td>
          <td><?php if($row["status"]=="envoyé"){
         
            echo '<a href="/commandesclient?confirmerclient=confirmer&id=';echo $row["idcommande"];echo' "><button class="btn btn-info">Livré</button></a>';

          }elseif($row["status"]==NULL){echo'en cours';}else{echo'envoyé';}?></td>
        </tr>
        <?php 
    };} ?>

      </tbody>
    </table>
  </div>


<?php include_once("footer.php") ?>
