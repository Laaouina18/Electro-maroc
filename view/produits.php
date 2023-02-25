<?php  include_once("header.php");
include_once("navbar.php");
include_once("../controller/ProductController.php");
include_once("../controller/carteController.php");
$conn=connect_to_db();
if(isset($_GET["pmin"])){
  $stmt=$conn->prepare("select * from produit inner join categorie on produit.idcategorie=categorie.idcategorie order by prixfinal ASC LIMIT :offset, 10;");
}elseif(isset($_GET["pmax"])){
  $stmt=$conn->prepare("select * from produit inner join categorie on produit.idcategorie=categorie.idcategorie order by prixfinal DESC LIMIT :offset, 10;");
}else{
  $stmt=$conn->prepare("select * from produit inner join categorie on produit.idcategorie=categorie.idcategorie LIMIT :offset, 10 ;");
}
$total=$conn->query("select count(*) from produit inner join categorie on produit.idcategorie=categorie.idcategorie")->fetchColumn();
$pages = $total ;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page);
// $page = isset($_GET['page']) ? $_GET['page'] : 1; // get current page number
// $recordsPerPage = 12; // set the number of records per page
// $offset = ($page - 1) * $recordsPerPage; // calculate the offset

// // modify your query to limit the records based on the offset and records per page
// $stmt = $conn->prepare("SELECT * FROM produit inner join categorie on produit.idcategorie=categorie.idcategorie LIMIT :offset, :recordsPerPage");
// $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
// $stmt->bindParam(':recordsPerPage', $recordsPerPage, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$produit = $stmt->fetchAll();
?>

    <!-- product cards -->
    <?php if(isset($_SESSION["user"])){
    echo '
    <div class="input text-center">
       
      <a href="/ajouter"><button class="subscribe">Ajouter Produit</button></a>  
      </div>';}?>
     
   <div class="container" id="product-cards">
   <h1 class="text-center">PRODUCTS</h1>
   <div  class="text-center">
      <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
        <option>Aléatoire</option>
         <option value="/Products?pmin=1">Par prix min</option>
      <option value="/Products?pmax=1"> Par prix max</option>
       
      </select>
    </div>
      
       <!-- <a href="/acheter"> -->
       
      <div class="row" style="margin-top: 30px;">
     <?php foreach ($produit as $produit){?>
        <div class="col-md-3 py-3 py-md-2">
          
          <div class="card">
          
            <img src="<?= $produit["photo"]?>" alt=""> 
            <div class="card-body">
            <a  style="text-decoration:none;"> 
             <a href="/description?id=<?=$produit['id'] ?>" style="text-decoration: none;"> <h3 class="text-center"><?php echo $produit["namep"]; ?></h3></a> 
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
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container justify-content-center">
  <ul class="pagination">
    <?php 
  for ($i = 1; $i <= $pages; $i++) {
  echo "
    <li class='page-item'><a class='page-link' href='/Products?page=$i'>$i</a></li>
   
";}?>
</ul>
  </div>
</nav>
     
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
		
