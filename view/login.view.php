<?php include "header.php"; ?>

<?php include_once("navbar.php") ?>
   <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">Welcome Back!</h3>
        </div>
        <div class="col-md-7 py-3 py-md-0" id="side2">
            <h3 class="text-center">Account login</h3>
            <!-- <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, sequi.</p> -->
            <form action="/login" method="post">
            <div class="input2 text-center">
            <input type="name"name="email" placeholder="User Name">
            <input type="password" name="pass"placeholder="Password">

           <div style="margin-top: 2rem;"> <button  class="text-center" type="submit" id="btnlogin"  >LOG IN<button>
           </div></div>
</form>
            <p class="text-center">Forgot Password<a href="#">Click</a></p>
</div>

    </div>
   </div>
   
   <!-- <div class="container" id="newslater">
      <h3 class="text-center">Subscribe To The Electronic Shop For Latest upload.</h3>
      <div class="input text-center">
        <input type="text" placeholder="Enter Your Email..">
        <button id="subscribe">SUBSCRIBE</button>
      </div>
    </div>
    -->
    <div class="container py-4"style="margin-top:2rem;text-align:center;" >
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
   


