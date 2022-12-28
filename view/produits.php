<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");?>
    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
    echo '
    <div class="input text-center">
       
      <a href="ajouter"><button id="subscribe">Ajouter Produit</button></a>  
      </div>';}?>
    <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
       <!-- <a href="/acheter"> -->
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($produit as $produit): ?>
        <div class="col-md-3 py-3 py-md-0">
          
          <div class="card">
         
            <img src="<?= $produit["photo"]?>" alt="">  
            <div class="card-body">
              <h3 class="text-center"><?php echo $produit["name"]; ?></h3>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
          
    
      <div class="input text-center"style="display:flex">
     
      <div class="input text-center">
       
      <a href="/Products?a=supprimer&id=<?php echo $produit["id"]?>"><button name="supprimer"id="subscribe" style="margin-bottom:2px;color:red;background-color:white;" > <?php if(isset($_SESSION["user"])){ echo 'Supprimer';}?></button></a>
       <a href="/ajouter?b=modifier&id=<?php echo $produit["id"]?>"><button name="modifier" id="subscribe" style="margin:2px;color:blue;background-color:white;"> <?php if(isset($_SESSION["user"])){ echo 'Modifier';}?></button></a>  
       </div>
      
      </div>
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
		
