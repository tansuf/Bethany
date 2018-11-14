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
                    <img class="card-img" src="<?= $dir.'assets/img/shipping2.jpg' ?>" alt="Card image">
                    <div class="card-img-overlay">
                        <br><br><br><br><br><br>
                        <h5 class="card-title display-4 text-center text-white">Maritime and Admiralty Services</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8 mt-4">
                    <h2 class="font-weight-bold mb-4">Maritime and Admiralty Services</h2>
                    <p class="lead text-justify">Considering the various international laws and regulations, including 
                        the local legislations, the maritime industry can be a challenge to navigate. Bethany Law 
                        & Partners' maritime team is experienced in sorting out complex issues and getting things 
                        done for our clients. Our lawyers find financing, regulatory compliance, vessel sales, 
                        bareboat charters, maritime litigation, and environmental pollution defense. Our clients 
                        include a broad range of vessel owners, operators and managers, government contractors, 
                        maritime terminal operators, shipyards, logistics providers, marine equipment suppliers, 
                        port authorities, financial institutions, businesses that charter vessels, and others 
                        engaged in the provision or purchase of maritime transportation services. <br><br>
                        At Bethany Law & Partners, we provide maritime and admiralty legal services in the following areas:
                        <ul class="lead text-justify">
                            <li>Litigation</li>
                            <li>Government Contracts</li>
                            <li>Finance, Leasing, and Mergers and Acquisitions</li>
                            <li>Legislation</li>
                            <li>International Trade</li>
                            <li>Seafarers Registration</li>
                            <li>Cabotage Compliance & Registration</li>
                            <li>Flagship Registration</li>
                            <li>Registration of Tanker Vessels</li>
                            <li>Obtainment of Tonnage & Safe Manning Certificates</li>
                            <li>Conversion of Vessels to Home Use</li>
                            <li>Processing of Temporary Importation</li>
                            <li>Vessel Arrest and Release</li>
                            <li>Advice on Local Contract Act</li>
                        </ul>
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