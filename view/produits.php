<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");?>
    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
    echo '
    <div class="input text-center">
       
      <a href="ajouter"><button class="subscribe">Ajouter Produit</button></a>  
      </div>';}?>
   <div class="container" id="product-cards" style="margin:auto;">
      <h1 class="text-center">PRODUCTS</h1>
       <!-- <a href="/acheter"> -->
       
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($produit as $produit): ?>
        <div class="col-md-3 py-3 py-md-0">
          
          <div class="card">
          
            <img src="<?= $produit["photo"]?>" alt=""> 
            <div class="card-body">
            <a href="/description?p=a&id=<?php echo $produit["id"]?>" style="list-style:none;"> 
              <h3 class="text-center"><?php echo $produit["name"]; ?></h3></a> 
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
        <?php if (isset($_SESSION["user"])) { ?>  
    
      <div class="input text-center"style="display:flex">
     
      <div class="input text-center">
       
      <a href="/Products?a=supprimer&id=<?php echo $produit["id"] ?>"><button name="supprimer"class="subscribe" style="margin-bottom:2px;color:red;background-color:white;" > <?php if (isset($_SESSION["user"])) {
        echo 'Supprimer';
      } ?></button></a>
       <a href="/update?b=modifier&id=<?php echo $produit["id"] ?>"><button name="modifier" class="subscribe" style="margin:2px;color:blue;background-color:white;"> <?php if (isset($_SESSION["user"])) {
         echo 'Modifier';
        }
        ;
      ?></button></a>
      <a href="/acheter?b=acheter&id=<?php echo $produit["id"] ?>"><button name="achetter" class="subscribe" style="margin:2px;color:blue;background-color:white;">Achetter</button></a>   
       </div>
      
      </div>
      <?php }?>
              <h2><?php echo $produit["prixfinal"]; ?> <span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
          </div>
        
        </div>
        <?php endforeach; ?>
        
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
		
