
<?php
include_once("header.php");
include_once("navbar.php");
include_once("../controller/ClientController.php")

?>


<section class="clients">
  <div class="clients-list">
  <div class="clients-liste">
      
       
    <table class="table">
      <thead>
        <tr>
          <!-- <th scope="titre-table">#</th> -->
          <th scope="titre-table">Clients</th>
          <th scope="titre-table">Name</th>
          <th scope="titre-table">Email</th>
          <th scope="titre-table">Numéro de Téléphone</th>
          <th scope="titre-table">Ville</th>
          <th scope="titre-table">Commande</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach ($clients as $i => $client) : ?>
        <tr classe="active">
          <th ><?php echo $i + 1 ?></th>
     
          <td><?php echo $client["name"] ?></td>
          <td><?php echo $client["email"] ?></td>
          <td><?php echo $client["num"] ?></td>
          <td><?php echo $client["ville"] ?></td>
          <td>....</td>

        
        </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</section>
<?php include_once("footer.php") ?>
