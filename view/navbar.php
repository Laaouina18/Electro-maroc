   <!-- top navbar -->

 <?php  function connect_to_db(){
    try {
        $database = new PDO("mysql:host=localhost;dbname=electromaroc", 'root', '');
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $database;
    } catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
    }
};
$conn=connect_to_db();
 $stmt=$conn->query("select * from categorie ;");
        
        $cat=$stmt->fetchAll();
        ?>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home" id="logo"><span id="span1">E</span>Lectro <span>Maroc</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="assets/images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Products">Products</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86);">
                <?php foreach($cat as $catsss):?>
                 
                  <li><a class="dropdown-item" href="/categorie?t=<?php echo$catsss ["namecategorie"] ?>"><?php echo $catsss["namecategorie"] ?></a></li>
                  <?php endforeach; ?>
                 
                  <li><a class="dropdown-item" href="/cate">Catégories</a></li>
                 
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            
                <?php if (isset($_SESSION["user"])) {
              echo '
                  <li class="nav-item">
                  <a class="nav-link" href="/commandes">Commandes</a>
                </li>';};?>
                   <?php if (isset($_SESSION["client"])) {
              echo '
                  <li class="nav-item">
                  <a class="nav-link" href="/carte">Carte</a>
                </li>';};?>
                    <?php if (isset($_SESSION["client"])) {
              echo '
                  <li class="nav-item">
                  <a class="nav-link" href="/commandesclient">Mes Commandes</a>
                </li>';};?>
            </ul>
            <div class="top-navbar">
       
        <div class="icons">
        <?php
          if (isset($_SESSION["user"]) || isset($_SESSION["client"])) {
        ?>
          <a style="color:white" href="/logout">
            <img src="assets/images/register.png" alt="" width="18px">
            logout
          </a>
        <?php
          } 
          else 
          {
        ?>
          <a style="color:white" href="/login">
          <img src="assets/images/register.png" alt="" width="18px">
            login
          </a>
        <?php
          }
        ?>
        <?php if (empty($_SESSION)) {
              echo '
        <a style="color:white" href="/inscription"><img src="assets/images/register.png" alt="" width="18px">Inscrir</a>';}?>
         <?php if(isset($_SESSION["user"]) || isset($_SESSION["client"])) {
          echo'<a style="color:white">
          <i class="fa-solid fa-user text-light"></i>Profile</a>';}?>
         
        </div>
    </div>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    
