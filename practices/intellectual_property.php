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

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="<?= $dir.'assets/img/int.jpg' ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <br><br><br><br><br><br>
                        <h5 class="card-title display-4 text-center text-white">Intellectual Property</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">Intellectual Property</h2>
                    <p class="lead text-justify">In a dynamic commercial landscape with ever-expanding technological horizons, it 
                        is increasingly important for businesses to capture value from their intellectual capital and 
                        knowledge-based assets. We work closely with many leading businesses to help them develop effective 
                        strategies for managining their IP portfolios. We are on hand to ensure that the IP they and their 
                        employees create is protected and where appropriate, enforced and explotied. <br><br>
                        And when disputes arise, we recognize that the best dispute resolution process 
                        depends on a broad mix of commercial and legal considerations. Clients turn 
                        to us because they know we can be relied on to be proactive in preserving 
                        their costs, reputation, relationships and other relevant factors when pursuing 
                        a successful outcome. <br><br>
                        Our golden IP team comprises of specialist lawyers providing the full range of IP services. 
                        We have expertise in the registration of Trademark(s) and Patents. This registration is essential 
                        for the establishment of proprietary rights in a mark and the vesting of same in the Trademark or 
                        Patent owner. Accordingly, the registration of a mark/Patent by an individual or corporate body 
                        precludes the use of the mark/Patent by any other entity in the jurisdiction where same is registered. <br><br>
                        We have over the years advised clients on the need to register their intellectual property, 
                        this we note would act as a constructive notice to the public of the registrant's claim of 
                        ownership of the mark, a legal presumption of the registrant's ownership of the mark and 
                        the registrant's exclusive right to use the mark nationwide on or in connection with the 
                        goods and/or services listed in the registration; in litigation it affords the party the 
                        ability to bring an action concerning the mark in the Law Court; and the use of the Nigerian 
                        registration as a basis to obtain registration in foreign countries. 
                    </p>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

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

        <?php
            include $dir."partials/footer.php";
            include $dir."partials/script.php";
        ?>   
    
</body>
</html>