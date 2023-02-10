<?php include_once("header.php") ?>
<?php include_once("navbar.php");
include_once("../controller/carteController.php"); 
include_once("../controller/CommandeController.php")?>

<?php if(count($carte)==0){
    echo '<div class="alert alert-primary" style="text-align:center;">
  <strong>Carte!</strong> Votre carte est vide.
</div>';
}?>

<div class="table-responsive m-3">
<form action="#" method="post">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Produit</th>
        
        <th scope="col">Status</th>
        <th>Quantite</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
       <?php foreach ($carte as $carte): ?>
      <tr>
      <td><img src="<?=$carte["photo"] ?>"></td>
      
        <td><?=$carte["status"] ?></td>
        <td><input type="number" value="<?=$carte["quant"] ?>"name="qtt[]"></td>
       
        <td>
         
          <a href="/carte?a=annuler&id=<?=$carte["idc"] ?>"><button class="btn btn-danger">Annuler</button><a>
        </td>
      </tr>
   <?php   endforeach;?>
    </tbody>
  </table>
 <button  name="confimer"class="btn btn-success" >Confirmer</button></form>

</div>

<?php include_once("footer.php") ?>
