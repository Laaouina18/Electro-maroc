<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");
 ?>
   
   <div class="container" id="about">
        <h3>PRODUCT</h3>
        <?php $produit = new ProductController;?>
        <hr><h3 class="text-center"><?= $produit->select('*', $_GET['id'])["categorie"] ?></h3>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                <img src="<?= $produit->select('*', $_GET['id'])["photo"] ?>" alt="">  
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
          
            <h3 style="color:blue"class="text-center"><?= $produit->select('*', $_GET['id'])["namep"] ?></h3>
            <p class="text-center"><h3 style="color:blue">Réference:</h3><?= $produit->select('*', $_GET['id'])["reference"] ?></p>
            <p class="text-center"><h3 style="color:blue">Prix:</h3><?= $produit->select('*', $_GET['id'])["prixfinal"] ?>DH</p>
            <p class="text-center"><?= $produit->select('*', $_GET['id'])["description"] ?><p>
            <?php if (isset($_SESSION['client'])) {
                echo '<a href="/produits?acheter=aa&id=';
                echo $_GET['id'];
                echo '"><button class="btn"> acheter</button></a> ';
              }?>
            </div>
           
        </div>
      
    </div>

 
     
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The ElectroMaroc For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button class="btn btn-danger" id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->



<?php include_once("footer.php") ?>
		
