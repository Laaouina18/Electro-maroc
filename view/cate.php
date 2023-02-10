<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/categorieController.php");



?>

    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
      echo '
    <div class="input text-center">
       
      <a href="/ajoutercat"><button class="subscribe">Ajouter Categorie</button></a>  
      </div>'; }?>

   <div class="container" id="product-cards" >
      <h1 class="text-center">Les Categories</h1>
     
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($cat as $categ){?>
        <div class="col-md-3 py-3 py-md-2">
          
          <div class="card">
          
            <img src="<?= $categ["photocategorie"]?>" alt=""> 
            <div class="card-body">
            <a href="/categorie?p=a&id=<?php echo $categ["idcategorie"]?>" style="text-decoration:none;"> 
              <h3 class="text-center"><?php echo $categ["namecategorie"]; ?></h3></a> 
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
          
              <?php if (isset($_SESSION["user"])) {
                  echo '
      <div class="input text-center"style="display:flex;"> 
      <div class="input text-center" >
      <a href="/cate?a=supprimer&id=';
              } ?><?php if (isset($_SESSION["user"])) {
                  echo $categ["idcategorie"];
              }?> <?php if (isset($_SESSION["user"])) {
                  echo '">
      <button name="supprimer"class="subscribe" 
      style="margin-bottom:2px;color:red;background-color:white;" > ';
              }?>
      <?php if (isset($_SESSION["user"])) {
          echo 'Supprimer';
      }?> <?php if (isset($_SESSION["user"])) {
          echo '</button></a>
       <a href="/updatecategorie?b=modifier&id=';
      }?><?php if (isset($_SESSION["user"])) {
          echo $categ["idcategorie"];
      }?> <?php if (isset($_SESSION["user"])) {
          echo '">
       <button name="modifier" class="subscribe" style="margin:2px;color:blue;background-color:white"> ';
      }?>
       <?php if (isset($_SESSION["user"])) {
           echo 'Modifier';
       }
    ;
    ?>   <?php if (isset($_SESSION["user"])) {
        echo '</button></a>
       </div>  </div>';
    }?>

            </div>
          </div>
        
        </div>
        <?php }; ?>
        
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


		
