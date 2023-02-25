<?php include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");

?>
  <div class="container"  style="margin-bottom: 50%;">
  <div class="row justify-content-center">
    <form class="col-md-7 py-3 py-md-0" method="post" action="/Products" enctype="multipart/form-data">
      <h3 class="text-center"style="margin-top:10%">Ajouter Produit</h3>
      <div class="form-group">
        <label for="photo">Photo :</label>
        <input type="file" name="photo" class="form-control-file" name="logo" required>
      </div>
      <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="categorie">Categorie :</label>
        <select id="categorie" name="categorie" class="form-control">
          <option>Catégorie</option>
          <?php foreach($cat as $cat):?><option> <?php echo $cat["namecategorie"];?></option><?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="quantite">Quantite :</label>
        <input type="text" id="quantite" name="quantite" class="form-control" placeholder="Quantite"required>
      </div>
      <div class="form-group">
        <label for="code_bare">code bare :</label>
        <input type="text" id="code_bare" name="code_bare" class="form-control" placeholder="code bare" required>
      </div>
      <div class="form-group">
        <label for="prix_achat">Prix achat :</label>
        <input type="text" id="prix_achat" name="prix_achat" class="form-control" placeholder="Prix achat" required>
      </div>
      <div class="form-group">
        <label for="prix_final">Prix final :</label>
        <input type="text" id="prix_final" name="prix_final" class="form-control" placeholder="prix final"required>
      </div>
      <div class="form-group">
        <label for="reference">Reference :</label>
        <input type="text" id="reference" name="reference" class="form-control" placeholder="Reference" required>
      </div>
      <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="description"required>
      </div>
      <div class="form-group text-center">
        <button name="save" class="btn btn-primary" type="submit" style="margin-top:2px">Save</button>
      </div>
    </form>
  </div>
</div >

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php include_once("../view/footer.php")?>