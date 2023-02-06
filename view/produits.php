<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/carteController.php");
include_once("../controller/ProductController.php");

?>

    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
    echo '
    <div class="input text-center">
       
      <a href="ajouter"><button class="subscribe">Ajouter Produit</button></a>  
      </div>';}?>

   <div class="container" id="product-cards" >
      <h1 class="text-center">PRODUCTS</h1>
       <!-- <a href="/acheter"> -->
        <div class="d-flex">
  
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($produit as $produit): ?>
        <div class="col-md-3 py-3 py-md-2">
          
          <div class="card">
          
            <img src="<?= $produit["photo"]?>" alt=""> 
            <div class="card-body">
            <a href="/description?p=a&id=<?php echo $produit["id"]?>" style="text-decoration:none;"> 
              <h3 class="name text-center"><?php echo $produit["name"]; ?></h3></a> 
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <?php if(isset($_SESSION["user"])) {
        echo '
      <div class="input text-center"style="display:flex;"> 
      <div class="input text-center" >
      <a href="/Products?b=supprimer&id=';
      } ?><?php if (isset($_SESSION["user"])) { echo $produit["id"]; }?> <?php if (isset($_SESSION["user"])) {
            echo '">
      <button name="supprimer"class="subscribe" 
      style="margin-bottom:2px;color:red;background-color:white;" > ';
          }?>
      <?php if (isset($_SESSION["user"])) {

        echo 'Supprimer';
      }?> <?php if (isset($_SESSION["user"])) {
        echo '</button></a>
       <a href="/update?b=modifier&id=';}?><?php if (isset($_SESSION["user"])) { echo $produit["id"]; }?> <?php if (isset($_SESSION["user"])) {
      
       echo '">
       <button name="modifier" class="subscribe" style="margin:2px;color:blue;background-color:white"> ';}?>
       <?php if (isset($_SESSION["user"])) {
         echo 'Modifier';
        }
        ;
      ?>   <?php if (isset($_SESSION["user"])) {
            echo '</button></a>
       </div>  </div>';}?>
   <h2><?php echo $produit["prixfinal"]; ?> 
              <span ><a class="fa-solid fa-cart-shopping"name="acheter"href="/produits?acheter=aa&id=<?php echo $produit['id'] ?>" style="color:black;"></a></span></h2>
            </div>
          </div>
        
        </div>
        <?php endforeach; ?>
        
        </div>
 
        </div>
        </div>
        
    <!-- newslater -->
    <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The ElectroMaroc For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button class="btn btn-danger"  id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    <!-- newslater -->


<?php include_once("footer.php") ?>


		
