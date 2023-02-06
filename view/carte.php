<?php include_once("header.php") ?>
<?php include_once("navbar.php");
include_once("../controller/carteController.php"); ?>


<div class="table-responsive m-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Produit</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
        <th>Quantite</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        <?php  foreach ($carte as $carte): ?>
      <tr>
      <td><img src="<?=$carte["photo"] ?>"></td>
        <td><?=$carte["date_creation"] ?></td>
        <td><?=$carte["status"] ?></td>
        <td><form action="/carte" method="post"><input type="number"value="<?=$carte["quant"] ?>" name="quantite"></td>
       
        <td>
          <a href="../carte?c=confirmer&id=<?=$carte["idc"] ?>"><button  class="btn btn-primary mr-2">Confirmer</button></a></form>
          <a href="../carte?a=annuler&id=<?=$carte["idc"] ?>"><button class="btn btn-danger">Annuler</button><a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>


<?php include_once("footer.php") ?>