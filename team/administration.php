<!DOCTYPE html>
<html lang="en">

<?php
  $dir = "../";
  include $dir."partials/head.php";
?>
<body>

<?php
  include $dir."partials/banner.php";
  include $dir."partials/nav.php";
?>


      <div class="container mt-5">
        <!-- Team -->
        <div class="card mb-5">
          <img class="card-img" src="<?= $dir.'assets/img/people/team1.jpg' ?>" alt="">
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card border border-dark">
              <img src="<?= $dir.'assets/img/people/monica1.jpg' ?>" class="card-img">
              <div class="card-body text-center">
                <h4>Monica Ekeh</h4>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  Incidunt, facilis at saepe voluptates omnis aliquam, porro accusamus ullam 
                  temporibus asperiores, a voluptatibus harum repudiandae suscipit. Laborum 
                  ipsum ducimus odio quaerat et. Odit officia est reiciendis. Nobis iusto 
                  eaque velit et.
                </p>
                <a href="<?= $dir.'team/administration/monica_ekeh.php' ?>" class="lead text-italize text-center">View Full Bio</a>
              </div>
              <div class="card-footer">
                <div class="btn-block btn bg-footer color1 text-center btn-lg py-3">
                  <i class="mx-4 fa-lg fa fa-envelope"></i>
                  <i class="mx-4 fa-lg fa fa-phone"></i>
                  <i class="mx-4 fa-lg fab fa-linkedin"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card border border-dark">
              <img src="<?= $dir.'assets/img/people/robina2.jpg' ?>" class="card-img">
              <div class="card-body text-center">
                <h4>Robina Ainyanbhor</h4>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  Incidunt, facilis at saepe voluptates omnis aliquam, porro accusamus ullam 
                  temporibus asperiores, a voluptatibus harum repudiandae suscipit. Laborum 
                  ipsum ducimus odio quaerat et. Odit officia est reiciendis. Nobis iusto 
                  eaque velit et.
                </p>
                <a href="<?= $dir.'team/administration/robina_ainyanbhor.php' ?>" class="lead text-italize text-center">View Full Bio</a>
              </div>
              <div class="card-footer">
                <div class="btn-block btn bg-footer color1 text-center btn-lg py-3">
                  <i class="mx-4 fa-lg fa fa-envelope"></i>
                  <i class="mx-4 fa-lg fa fa-phone"></i>
                  <i class="mx-4 fa-lg fab fa-linkedin"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- End team -->

  <!-- Social media links  -->
      <div>
        <hr class="my-4">
      </div>

      <div class="container-fluid padding mt-4">
        <div class="row text-center padding">
            <div class="col-12 mt-4">
              <h2>Connect</h2>
            </div>
            <div class="col-12 social padding mt-4">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
      </div>
      <!-- Social media links end here -->

      <!--Footer-->
      <?php
        include $dir."partials/footer.php";
        include $dir."partials/script.php";
      ?>
    
  </body>
</html>
     