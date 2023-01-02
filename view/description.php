<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");?>
   
   <div class="container" id="about">
        <h3>PRODUCT</h3>
        <?php $produit = new ProductController;?>
        <hr><h3 class="text-center"><?= $produit->select('*', $id)["categorie"] ?></h3>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                <img src="<?= $produit->select('*', $id)["photo"] ?>" alt="">  
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
          
            <h3 style="color:black"class="text-center"><?= $produit->select('*', $id)["name"] ?></h3>
            <p class="text-center"><h3 style="color:black">Réference:</h3><?= $produit->select('*', $id)["reference"] ?></p>
            <p class="text-center"><h3 style="color:black">Prix:</h3><?= $produit->select('*', $id)["prixfinal"] ?></p>
            <p class="text-center"><?= $produit->select('*', $id)["description"] ?><p>
            </div>
        </div>
    </div>

 
     
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The ElectroMaroc For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->



<?php include_once("footer.php") ?>
		
