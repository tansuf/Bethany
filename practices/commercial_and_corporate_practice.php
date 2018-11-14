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
                    <img class="card-img" src="<?= $dir.'assets/img/banner3.jpg' ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <br><br><br><br><br><br>
                        <h5 class="card-title display-4 text-center text-white">Commercial and Corporate Practice</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">Commercial and Corporate Practice</h2>
                    <p class="lead text-justify">The Corporate and Commercial Practice Unit of our Firm falls at the heart of our
                        practice. It is headed by the managing partner and supported by a team of well  trained and experienced
                        lawyers who specializes in advising clients on a wide spectrum of services, to wit, mergers and acquisition,
                        private equity investment, joint venture contracts, corporate regularization, company registration and 
                        other commercial works. <br><br>
                        Our lawyers have expert knowledge of the legal framework in their local jurisdictions as well as strong 
                        commercial and contract drafting skills. We offer specialists who understand the unique legal and business 
                        requirements of specific industry sectors and who bring an international perspective that accomodates the 
                        increasingly common cross border nature of many deals and contractual matters. <br><br>
                        Leveraging on our extensive experience and understanding of the ever changing regulatory business environments
                        , we handle a wide range of legal matters in the domestic and cross-border markets. Our expertise covers divestment 
                        and acquisition of shares, corporate reorganization, project financing, capital restructuring and a comprehensive 
                        range of agency, supply and contract services. <br><br>
                        Contact person: <b>Ikechukwu Nwakwuo</b> 
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

        <!--Footer-->
        <?php
            include $dir."partials/footer.php";
            include $dir."partials/script.php";
        ?>
        
</body>
</html>