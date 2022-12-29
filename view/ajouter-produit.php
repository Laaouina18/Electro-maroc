<?php include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");?>
   <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Register</h3>
        </div>
        <form class="col-md-7 py-3 py-md-0" id="side2" method="post" action="/Products" enctype="multipart/form-data">
            <h3 class="text-center">Ajouter Produit</h3>

            <div class="input2 text-center">
            <input  type="file" name="photo"class="form-control-file" name="logo">
            <input type="name" name="name" placeholder="Name">
            <input type="name" name="categorie"placeholder="Categorie">
            <input type="text"name="quantite" placeholder="Quantite">
            <input type="text" name="code_bare"placeholder="code bare">
            <input type="text"name="prix_achat" placeholder="Prix achat">
            <input type="text" name="prix_final"placeholder="prix final">
            <input type="text" name="reference"placeholder="Reference">
            <input type="text"name="description"placeholder="description">
            </div>
   
            <div style="margin-top: 2rem;"> <button name="save"  class="text-center" type="submit" id="btnlogin"  >Save<button>
           </div></div>
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