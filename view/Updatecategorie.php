<?php include_once("header.php");
include_once("navbar.php");
include_once("../controller/categorieController.php");?>
   <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Register</h3>
        </div>
        <?php $categorie = new CatController;?>
        <form class="col-md-7 py-3 py-md-0" id="side2" method="post" action="?b=modifier&c=update&id=<?= $categorie->select( $id)["idcategorie"] ?>" enctype="multipart/form-data">
            <h3 class="text-center">Ajouter Produit</h3>

            <div class="input2 text-center">
                
            <input  type="file" value="<?= $categorie->select( $id)["photocategorie"] ?>"name="photo"class="form-control-file" name="logo">
            <input type="name" value="<?= $categorie->select( $id)["namecategorie"] ?>" name="name" placeholder="Name">

            <input type="text" value="<?= $categorie->select( $id)["descriptioncat"] ?>"name="description"placeholder="description">
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