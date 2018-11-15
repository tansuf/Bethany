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
        <!-- End nav -->

      <div class="container mt-3 mt-md-5">
        <!-- Team -->
        <div class="card mb-3">
          <img class="card-img" src="<?= $dir.'assets/img/people/team1.jpg' ?>" alt="">
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ml-1">
                    <li class="breadcrumb-item">Our Team</li>
                    <li class="breadcrumb-item">Counsel</li>
                </ol>
            </nav>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card border border-dark">
              <img src="<?= $dir.'assets/img/people/IkeNwankwuo.jpg' ?>" class="card-img">
              <div class="card-body text-center">
                <h4>Nwakwuo Ikechukwu</h4>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  Incidunt, facilis at saepe voluptates omnis aliquam, porro accusamus ullam 
                  temporibus asperiores, a voluptatibus harum repudiandae suscipit. Laborum 
                  ipsum ducimus odio quaerat et. Odit officia est reiciendis. Nobis iusto 
                  eaque velit et.
                </p>
                <a href="<?= $dir.'team/counsel/nwakwuo_ikechukwu.php' ?>" class="lead text-italize text-center">View Full Bio</a>
              </div>
              <div class="card-footer">
                <div class="btn-block btn color2 color1 text-center btn-lg py-3">
                  <i class="mx-4 fa-lg fa fa-envelope"></i>
                  <i class="mx-4 fa-lg fa fa-phone"></i>
                  <i class="mx-4 fa-lg fab fa-linkedin"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card border border-dark">
              <img src="<?= $dir.'assets/img/people/JosephLawyer.jpg' ?>" class="card-img">
              <div class="card-body text-center">
                <h4>Joseph Ekere</h4>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  Incidunt, facilis at saepe voluptates omnis aliquam, porro accusamus ullam 
                  temporibus asperiores, a voluptatibus harum repudiandae suscipit. Laborum 
                  ipsum ducimus odio quaerat et. Odit officia est reiciendis. Nobis iusto 
                  eaque velit et.
                </p>
                <a href="<?= $dir.'team/counsel/joseph_ekere.php' ?>" class="lead text-italize text-center">View Full Bio</a>
              </div>
              <div class="card-footer">
                <div class="btn-block btn color2 color1 text-center btn-lg py-3">
                  <i class="mx-4 fa-lg fa fa-envelope"></i>
                  <i class="mx-4 fa-lg fa fa-phone"></i>
                  <i class="mx-4 fa-lg fab fa-linkedin"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card border border-dark">
              <img src="<?= $dir.'assets/img/people/chioma4.jpg' ?>" class="card-img">
              <div class="card-body text-center">
                <h4>Chioma Chinyere Onyehara</h4>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                  Incidunt, facilis at saepe voluptates omnis aliquam, porro accusamus ullam 
                  temporibus asperiores, a voluptatibus harum repudiandae suscipit. Laborum 
                  ipsum ducimus odio quaerat et. Odit officia est reiciendis. Nobis iusto 
                  eaque velit et.
                </p>
                <a href="<?= $dir.'team/counsel/chioma_oyehara.php' ?>" class="lead text-italize text-center">View Full Bio</a>
              </div>
              <div class="card-footer">
                <div class="btn-block btn color2 color1 text-center btn-lg py-3">
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


        <!--Footer-->
        <?php
          include $dir."partials/footer.php";
          include $dir."partials/script.php";
        ?>
    
</body>
</html>
    