<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");
include_once("../controller/carteController.php");
$conn=connect_to_db();
$stmt=$conn->query("SELECT *FROM produit inner join categorie on produit.idcategorie=categorie.idcategorie");
$produit=$stmt->fetchAll();
?>
    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
    echo '
    <div class="input text-center">
       
      <a href="/ajouter"><button class="subscribe">Ajouter Produit</button></a>  
      </div>';}?>
   <div class="container" id="product-cards">
      <h1 class="text-center">PRODUCTS</h1>
       <!-- <a href="/acheter"> -->
       
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($produit as $produit){?>
        <div class="col-md-3 py-3 py-md-2">
          
          <div class="card">
          
            <img src="<?= $produit["photo"]?>" alt=""> 
            <div class="card-body">
            <a  style="text-decoration:none;"> 
              <h3 class="text-center"><?php echo $produit["namep"]; ?></h3></a> 
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
          
    
 
              <?php if (isset($_SESSION["user"])) {
                echo '
      <div class="input text-center">
      <a href="/Products?a=supprimer&id=';
                echo $produit["id"];
                echo '"><button name="supprimer"class="subscribe" style="color:red;background-color:white;" > 
     
      
      Supprimer</button></a>
       <a href="/update?b=modifier&id=';
                echo $produit["id"];
                echo '"><button name="modifier" class="subscribe" style="color:blue;background-color:white;">
        
         Modifier
       
      </button></a>
      </div>';
              }?>
              <h2><?php echo $produit["prixfinal"]; ?> <span><a class="fa-solid fa-cart-shopping"
              <?php if (isset($_SESSION['client'])) {
                echo ' href="/produits?acheter=aa&id=';
                echo $produit['id'];
                echo '" ';
              }?>style="color:black;"></a></span></h2>
            </div>
          </div>
        
        </div>
        <?php };?>
        
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
		
