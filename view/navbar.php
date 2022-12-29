   <!-- top navbar -->

 
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
                  <li><a class="dropdown-item" href="/cartcategorie?t=S">Samrt Phone</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=G">Gaming Gadget</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=C">Cameras</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=F">Fridge</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=W">Samrt Watch</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=H">Headphone</a></li>
                  <li><a class="dropdown-item" href="/cartcategorie?t=PM">PC Moniter</a></li>
               
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            </ul>
            <div class="top-navbar">
        <p>WELCOME TO OUR SHOP</p>
        <div class="icons">
        <?php
          if (isset($_SESSION["user"])) {
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
        <a style="color:white" href="/inscription"><img src="assets/images/register.png" alt="" width="18px">Inscrir</a>
        </div>
    </div>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    
