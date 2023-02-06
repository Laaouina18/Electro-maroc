
<?php
include_once("header.php");
include_once("navbar.php");
include_once("../controller/ClientController.php")

?>


<div class="table-responsive m-3">
  <table class="table">
      <thead  class="thead-dark">
        <tr>
          <!-- <th scope="titre-table">#</th> -->
          <th scope="col">Clients</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Numéro de Téléphone</th>
          <th scope="col">Ville</th>
          <th scope="col">Commande</th>
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


<?php include_once("footer.php") ?>
