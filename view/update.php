<?php include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");?>
   <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Register</h3>
        </div>
        <?php $produit = new ProductController;?>
        <form class="col-md-7 py-3 py-md-0" id="side2" method="post" action="?b=modifier&c=update&id=<?= $produit->select('id', $id)["id"] ?>" enctype="multipart/form-data">
            <h3 class="text-center">Ajouter Produit</h3>

            <div class="input2 text-center">
                
            <input  type="file" value="<?= $produit->select('*', $id)["photo"] ?>"name="photo"class="form-control-file" name="logo">
            <input type="name" value="<?= $produit->select('*', $id)["name"] ?>" name="name" placeholder="Name">
            <input type="name" value="<?= $produit->select('*', $id)["categorie"] ?>"name="categorie"placeholder="Categorie">
            <input type="text"value="<?= $produit->select('*', $id)["quantite"] ?>"name="quantite" placeholder="Quantite">
            <input type="text" value="<?= $produit->select('*', $id)["codebare"] ?>"name="code_bare"placeholder="code bare">
            <input type="text"value="<?= $produit->select('*', $id)["prixachat"] ?>"name="prix_achat" placeholder="Prix achat">
            <input type="text" value="<?= $produit->select('*', $id)["prixfinal"] ?>"name="prix_final"placeholder="prix final">
            <input type="text"value="<?= $produit->select('*', $id)["reference"] ?>"name="reference"placeholder="Reference">
            <input type="text" value="<?= $produit->select('*', $id)["description"] ?>"name="description"placeholder="description">
            </div>
   
 <button style="margin-top: 2rem;" name="update" class="text-center" type="submit" id="btnlogin"  >Save<button>
           </div>
</form>

    </div>
   </div>
   <div class="container py-4"id="nv"style="margin-top:6rem;text-align:center;">
        <div class="copyright">
          &copy; Copyright <strong><span>Electro-Maroc</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Nouha</a>
        </div>
      </div>

   <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>