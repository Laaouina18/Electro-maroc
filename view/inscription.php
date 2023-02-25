<?php include_once("header.php");
include_once("navbar.php");
include_once("../controller/ClientController.php")?>
   <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Register</h3>
        </div>
        <div class="col-md-7 py-3 py-md-0" id="side2">
            <h3 class="text-center">Create Account</h3>
            <form action="/inscription" method="post">
            <div class="input2 text-center">
            <input name="name" type="name" placeholder="Name"required>
            <input name="num" type="number" placeholder="Phone" required>
            <input name="email" type="email" placeholder="Email" required>
            <input name="pass" type="password" placeholder="entrer votre mot de passe" required>
            <input name="ville" type="name" placeholder="Ville" required>
            <input name="adresse" type="text" placeholder="adresse" required>
            <input name="codepost" type="text" placeholder="code postale" required>
         

            </div>
            <div style="margin-top: 2rem;"> <button name="save"  class="text-center" type="submit" id="btnlogin"  >LOG IN<button>
           </div></form></div>
        </div>

    </div>
   </div>
   <div class="container py-4"style="margin-top:6rem;text-align:center;">
        <div class="copyright">
          &copy; Copyright <strong><span>Electro-Maroc</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">Nouha</a>
        </div>
      </div>
   
   <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




    
   
 